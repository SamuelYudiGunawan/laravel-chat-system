<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $chatController = new ChatController();
        $chats = $chatController->getAllChat();



        return view("home", ['chats' => $chats]);
    }

}
