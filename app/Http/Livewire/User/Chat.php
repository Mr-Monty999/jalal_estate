<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Musonza\Chat\Facades\ChatFacade;
use Livewire\WithFileUploads;

class Chat extends Component
{
    use WithFileUploads;


    public $chatMessages;
    public $message;
    public $receiverId;
    public $conversationId;
    public $image;
    public $search;

    public function sendMessage()
    {
        $this->validate([
            "receiverId" => "required|numeric",
            "image" => "nullable|image",
            "message" => "nullable:image|string",
        ]);

        $sender = auth()->user();
        $receiver = User::find($this->receiverId);

        if (!$this->message)
            $this->message = "attachment";

        $participants = [
            $sender, $receiver
        ];

        $conversation = ChatFacade::conversations()->between($sender, $receiver);

        if ($conversation == null)
            $conversation = ChatFacade::makeDirect()->createConversation($participants);


        $message = ChatFacade::message($this->message)
            ->from($sender);


        if ($this->image) {
            $image = $this->image->storeAs('images/chat', time() . '.' . $this->image->extension(), "public");
            $message->data(['image' => $image]);
        }



        $message
            ->to($conversation)
            ->send();

        $this->getConversationMessages();
        $this->message = '';
        $this->image = null;
    }
    public function getConversationMessages($conversationId = null)
    {
        // $this->validate([
        //     "conversationId" => "required|numeric"
        // ]);

        $user = auth()->user();
        if ($conversationId != null)
            $this->conversationId = $conversationId;

        if ($this->conversationId == null)
            return;

        $conversation = ChatFacade::conversations()->getById($this->conversationId);

        ChatFacade::conversation($conversation)->setParticipant($user)->readAll();


        $this->receiverId = $conversation->participants()
            ->where('messageable_id', '!=', $user->id)
            ->first()->messageable_id;


        $this->chatMessages = $conversation->messages;

        // dd($this->chatMessages);
    }
    public function mount()
    {
        $this->chatMessages = [];
    }
    public function getConversations()
    {
        $user = auth()->user();

        $conversations = ChatFacade::conversations()
            // ->join('chat_participation', 'chat_participation.id', '=', 'conversations.id')
            ->setParticipant($user)
            // ->join('chat_participation', 'chat_participation.id', '=', 'conversations.id')
            // ->where()
            // ->paginate(1);
            ->get();

        // dd($conversations);

        return $conversations;
    }
    public function render()
    {
        // dd(auth()->user());
        // all conversations
        $conversations = $this->getConversations();

        return view('livewire.user.chat', [
            "conversations" => $conversations
        ]);
    }
}