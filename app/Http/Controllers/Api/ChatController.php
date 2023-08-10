<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendMessageRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Musonza\Chat\Chat;

class ChatController extends Controller
{
    public function sendMessage(SendMessageRequest $request)
    {

        $sender = User::findOrFail($request->sender_id);
        $receiver = User::findOrFail($request->receiver_id);

        $participants = [
            $sender, $receiver
        ];

        $conversation = Chat::createConversation($participants)->makePrivate();

        $message = Chat::message('Hello')
            ->from($sender)
            ->to($receiver)
            ->send();

        return response()->json();
    }
}
