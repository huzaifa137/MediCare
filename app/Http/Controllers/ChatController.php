<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Conversation;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{

    public function chatroom()
    {
        $userId = session('LoggedAdmin');
        $user = User::findOrFail($userId);

        if ($user->user_role == 2) { // Doctor
            $doctor = Doctor::where('email', $user->email)->first();

            $conversations = Conversation::with(['patient', 'lastMessage'])
                ->where('doctor_id', $doctor->id ?? 0)
                ->latest()
                ->get();

            // No doctors list for doctors
            $doctors = null;

            return view('chat.chatroom', compact('conversations', 'user', 'doctors'));

        } elseif ($user->user_role == 3) { // Patient
            $patient = Patient::where('user_id', $user->id)->first();

            $conversations = Conversation::with(['doctor', 'lastMessage'])
                ->where('patient_id', $patient->id ?? 0)
                ->latest()
                ->get();

            // Only patients get doctors to start new conversation
            $doctors = Doctor::whereNotIn('id', $conversations->pluck('doctor_id'))->get();

            return view('chat.chatroom', compact('conversations', 'doctors', 'user'));
        }

        return abort(403, 'Unauthorized');
    }

    public function storeMessage(Request $request, Conversation $conversation)
    {
        $request->validate([
            'message' => 'required|string'
        ]);

        $userId = session('LoggedAdmin');
        $user = User::findOrFail($userId);

        $senderType = $user->user_role == 2 ? 'doctor' : 'patient';

        $message = $conversation->messages()->create([
            'sender_id' => $user->id,
            'sender_type' => $user->user_role == 2 ? 'doctor' : 'patient',
            'message' => $request->message,
            'status' => 'sent',
            'created_at' => $request->client_time ?? now(), // use client time if sent
            'updated_at' => $request->client_time ?? now(),
        ]);


        return response()->json([
            'message' => $message->message,
            'time' => $message->created_at->format('h:i A')
        ]);
    }

    public function show(Conversation $conversation)
    {

        $messages = $conversation->messages()->orderBy('created_at')->get();

        if (request()->ajax()) {
            return view('chat.partials.messages', compact('conversation', 'messages'))->render();
        }

        return view('chat.chatroom', compact('conversations', 'conversation', 'messages'));
    }

    public function startConversation($doctorId)
    {
        $userId = session('LoggedAdmin');
        $user = User::findOrFail($userId);

        if ($user->user_role != 3) {
            return response()->json(['error' => 'Only patients can start conversations'], 403);
        }

        // Get the patient record linked to this user
        $patient = Patient::where('user_id', $user->id)->first();

        if (!$patient) {
            return response()->json(['error' => 'Patient record not found'], 404);
        }

        // Create or get existing conversation
        $conversation = Conversation::firstOrCreate([
            'doctor_id' => $doctorId,
            'patient_id' => $patient->id, // ✅ use actual patient.id
        ]);

        return response()->json([
            'conversation_id' => $conversation->id
        ]);
    }

    public function store(Request $request, Conversation $conversation = null)
    {
        $request->validate(['message' => 'required|string']);

        $user = User::find(session('LoggedAdmin'));

        // For patients, check if conversation exists between this doctor and patient
        if ($user->user_role == 3 && !$conversation) {
            $patient = Patient::where('user_id', $user->id)->first();
            $conversation = Conversation::firstOrCreate([
                'doctor_id' => $request->doctor_id,
                'patient_id' => $patient->id,
            ]);
        }

        // Create message
        $message = $conversation->messages()->create([
            'sender_id' => $user->id,
            'sender_type' => $user->user_role == 2 ? 'doctor' : 'patient',
            'message' => $request->message,
            'status' => 'sent',
        ]);

        return response()->json([
            'message' => $message->message,
            'time' => $message->created_at->format('h:i A'),
            'conversation_id' => $conversation->id,
        ]);
    }

    public function sendFirstMessage(Request $request)
    {

        $request->validate([
            'message' => 'required|string',
            'doctor_id' => 'required|exists:doctors,id'
        ]);

        $user = User::find(session('LoggedAdmin'));

        if ($user->user_role != 3) {
            return response()->json(['error' => 'Only patients can send first messages'], 403);
        }

        $patient = Patient::where('user_id', $user->id)->first();

        // Create conversation + first message
        $conversation = Conversation::firstOrCreate([
            'doctor_id' => $request->doctor_id,
            'patient_id' => $patient->id,
        ]);

        $message = $conversation->messages()->create([
            'sender_id' => $user->id,
            'sender_type' => 'patient',
            'message' => $request->message,
            'status' => 'sent',
        ]);

        return response()->json([
            'conversation_id' => $conversation->id,
            'message' => $message->message,
            'time' => $message->created_at->format('h:i A'),
        ]);
    }

    public function getMessages(Conversation $conversation)
    {
        $user = User::find(session('LoggedAdmin'));

        // Mark all incoming messages as read
        $conversation->messages()
            ->where('sender_id', '!=', $user->id)
            ->where('status', '!=', 'read')
            ->update(['status' => 'read']);

        $messages = $conversation->messages()->orderBy('created_at')->get()->map(function ($msg) {
            return [
                'sender_id' => $msg->sender_id,
                'message' => $msg->message,
                'time' => $msg->created_at->timezone(config('app.timezone'))->format('h:i A'),
                'status' => $msg->status,
                'conversation_id' => $msg->conversation_id,
            ];
        });

        return response()->json($messages);
    }

    public function markRead(Conversation $conversation)
    {
        $user = User::find(session('LoggedAdmin'));

        $conversation->messages()
            ->where('sender_id', '!=', $user->id)
            ->where('status', '!=', 'read')
            ->update(['status' => 'read']);

        return response()->json(['success' => true]);
    }


}
