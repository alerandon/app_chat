<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Message;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $auth_users = Auth::check();
        $user = Auth::user()->name;
        return view('chat', compact('auth_users', 'user'));
    }

    public function fetchMessages()
    {
        $messages = Message::with('user')->get();

        return response()->json($messages);
    }

    public function sendMessage(Request $request)
    {
        $message = Message::create([
            'user_id' => Auth::user()->id,
            'text' => $request->message
        ]);

        return response()->json($message);
    }
}
