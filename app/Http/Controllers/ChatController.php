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
            $doctor = Doctor::where('email', $user->email)->first(); // Or link with user_id if exists

            $conversations = Conversation::with(['patient', 'lastMessage'])
                ->where('doctor_id', $doctor->id ?? 0)
                ->latest()
                ->get();

            return view('chat.chatroom', compact('conversations', 'user'));

        } elseif ($user->user_role == 3) { // Patient
            $patient = Patient::where('user_id', $user->id)->first();

            $conversations = Conversation::with(['doctor', 'lastMessage'])
                ->where('patient_id', $patient->id ?? 0)
                ->latest()
                ->get();

            // Fetch doctors to start new conversations
            $doctors = Doctor::all();

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
            'sender_type' => $senderType,
            'message' => $request->message,
            'status' => 'sent',
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

        // Save doctor_id and patient_id as USER IDs
        $conversation = Conversation::firstOrCreate([
            'doctor_id' => $doctorId,
            'patient_id' => $user->id,
        ]);

        return response()->json([
            'conversation_id' => $conversation->id
        ]);
    }

    public function store(Request $request, Conversation $conversation)
    {
        $request->validate([
            'message' => 'required|string'
        ]);

        $userId = Session('LoggedAdmin');
        $user = \App\Models\User::findOrFail($userId);
        $senderType = $user->user_role == 2 ? 'doctor' : 'patient';

        $message = $conversation->messages()->create([
            'sender_id' => $user->id,
            'sender_type' => $senderType,
            'message' => $request->message,
            'status' => 'sent',
        ]);

        // Return JSON for AJAX
        return response()->json([
            'message' => $message->message,
            'time' => $message->created_at->format('h:i A'),
        ]);
    }






}
