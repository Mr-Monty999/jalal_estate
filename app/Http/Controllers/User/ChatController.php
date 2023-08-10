<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendMessageRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Musonza\Chat\Chat;
use Musonza\Chat\Facades\ChatFacade;

class ChatController extends Controller
{

    public function index()
    {

        return view("user.chat.index");
    }

    public function sendMessage(SendMessageRequest $request)
    {

        $sender = auth()->user();
        $receiver = User::findOrFail($request->receiver_id);

        $participants = [
            $sender, $receiver
        ];

        $conversation = ChatFacade::conversations()->between($sender, $receiver);

        if ($conversation == null)
            $conversation = ChatFacade::makeDirect()->createConversation($participants);

        $message = ChatFacade::message($request->message)
            ->from($sender)
            ->to($conversation)
            ->send();

        return response()->json();
    }
}
