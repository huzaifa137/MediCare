<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{

    public function chatroom()
    {

        $user = Session('LoggedAdmin');

        if ($user instanceof \App\Models\Doctor) {
            $conversations = Conversation::with(['patient', 'lastMessage'])
                ->where('doctor_id', $user->id)
                ->latest()
                ->get();
        } else {
            $conversations = Conversation::with(['doctor', 'lastMessage'])
                ->where('patient_id', $user->id)
                ->latest()
                ->get();
        }

        return view('chat.chatroom', compact(['conversations']));
    }

    public function storeMessage(Request $request, Conversation $conversation)
    {
        $request->validate([
            'message' => 'required|string'
        ]);

        $user = Session('LoggedAdmin');

        $message = $conversation->messages()->create([
            'sender_id' => $user->id,
            'sender_type' => $user instanceof \App\Models\Doctor ? 'doctor' : 'patient',
            'message' => $request->message,
            'status' => 'sent',
        ]);

        if ($request->ajax()) {
            return response()->json([
                'id' => $message->id,
                'message' => $message->message,
                'time' => $message->created_at->format('H:i'),
                'sender' => $message->sender_type,
            ]);
        }

        return back()->with('success', 'Message sent!');
    }

}
