<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Musonza\Chat\Facades\ChatFacade;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Chat extends Component
{
    use WithFileUploads, WithPagination;


    // public $chatMessages;
    public $message;
    public $receiverId;
    public $conversationId;
    public $image;
    public $search;
    protected $paginationTheme = 'bootstrap';


    public function sendMessage()
    {
        $this->validate([
            "receiverId" => "required|numeric",
            "image" => "nullable|image",
            "message" => "required_without:image|string",
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
    public function getConversationMessages($conversationId = null, $perPage = 10)
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


        $lastPage = $conversation->messages()->paginate($perPage)->lastPage();
        // dd($conversation->messages()->paginate($perPage, ["*"], "messages"));

        return $conversation->messages()->paginate($perPage, ["*"], "messages" . $this->conversationId);

        // dd($this->chatMessages);
    }
    public function setConversationId($conversationId)
    {
        $this->conversationId = $conversationId;
    }
    // public function mount()
    // {
    //     $this->chatMessages = [];
    // }
    public function getConversations($perPage = 10)
    {
        $user = auth()->user();

        $page = 1;
        if (session()->has("conversation_current_page"))
            $page = session()->get("conversation_current_page");

        $conversations = ChatFacade::conversations()
            // ->join('chat_participation', 'chat_participation.id', '=', 'conversations.id')
            ->setParticipant($user)
            // ->join('chat_participation', 'chat_participation.id', '=', 'conversations.id')
            // ->where()
            // ->paginate(1);
            //
            // ->limit(1)
            // ->page($page)

            ->setPaginationParams([
                'page' => 1,
                'perPage' => $perPage,
                'sorting' => "asc",
                'columns' => [
                    '*'
                ],
                'pageName' => 'conversations'
            ])
            ->get();
        // ->paginate();




        // dd($conversations);

        return $conversations;
    }
    public function render()
    {
        // dd(auth()->user());
        // all conversations

        if (session()->has("conversation_id")) {
            $this->conversationId = session()->get("conversation_id");
            session()->remove("conversation_id");
        }

        $conversations = $this->getConversations(100);
        $chatMessages = $this->getConversationMessages($this->conversationId, 10);

        return view('livewire.user.chat', [
            "conversations" => $conversations,
            "chatMessages" => $chatMessages,
        ]);
    }
}
