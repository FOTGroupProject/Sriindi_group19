<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;
class messagecontroller extends Controller
{
    public function index()
    {
        // Example: Fetch all messages
        $messages = Message::all();
        return view('messages.index', ['messages' => $messages]);
    }

    public function create()
    {
        // Example: Show form to create a new message
        $users = User::all(); // Assuming you want to select a receiver from users
        return view('messages.create', ['users' => $users]);
    }

    public function store(Request $request)
    {
        // Example: Store a new message in the database
        $validatedData = $request->validate([
            'sender_id' => 'required|exists:users,id',
            'receiver_id' => 'required|exists:users,id',
            'message' => 'required|string|max:255',
        ]);

        Message::create($validatedData);
        return redirect()->route('messages.index')->with('success', 'Message sent successfully!');
    }
 //

}
