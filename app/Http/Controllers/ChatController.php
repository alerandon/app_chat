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
        //dd($user);
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
            'user_id' => auth()->id(),
            'text' => $request->all()
        ]);

        return response()->json($message);
    }
}
