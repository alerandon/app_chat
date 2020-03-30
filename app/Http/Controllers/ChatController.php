<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Message;
use App\User;

class ChatController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index() 
    {
        return view('chat');
    }

    public function fetchMessages()
    {
        return Message::with('user')->get();
    }

    public function sendMessage(Request $request)
    {
        $id = Auth::id();
        $user = User::find($id);

        $user->messages()->create([
            'message' => $request->message
        ]);

        return ['status' => 'success'];
    }
}
