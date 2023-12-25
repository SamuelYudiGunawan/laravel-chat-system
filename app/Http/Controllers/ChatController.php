<?php

namespace App\Http\Controllers;

use App\Models\Chatlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function chat(Request $r){
        $chatLog = new Chatlog();
        $chatLog->user_id = Auth::user()->id;
        $chatLog->message = $r->message;
        $chatLog->save();
        return redirect()->back();
    }

    public function getAllChat(){
        return Chatlog::all();
    }
}
