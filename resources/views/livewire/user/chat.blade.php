        <div class="container">
            <link rel="stylesheet" href="{{ asset('theme2/css/bootstrap.min.css') }}">
            @if (app()->getLocale() == 'ar')
                <link rel="stylesheet" href="{{ asset('theme2/css/bootstrap.min.rtl.css') }}">

                @include('layouts.arabic')
            @endif
            @php
                use Musonza\Chat\Facades\ChatFacade;
                
            @endphp
            <h3 class=" text-center">{{ trans('keywords.messages') }}</h3>
            <div class="messaging">
                <div class="inbox_msg d-flex">
                    <div class="inbox_people">
                        <div class="headind_srch">
                            <div class="recent_heading">
                                <h4>{{ trans('keywords.recent') }}</h4>
                            </div>
                            {{-- <div class="srch_bar">
                                <div class="stylish-input-group">
                                    <input wire:model.lazy="search" type="text" class="search-bar"
                                        placeholder="{{ trans('keywords.search') }}">
                                    <span class="input-group-addon">
                                        <button type="button"> <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </span>
                                </div>
                            </div> --}}
                        </div>
                        <style>
                            .active_chat {
                                background-color: cyan
                            }
                        </style>
                        <div wire:poll.5s="getConversations()" class="inbox_chat">
                            @foreach ($conversations as $index => $conversation)
                                @php
                                    $conversation = $conversation->conversation;
                                    $participant = $conversation
                                        ->participants()
                                        ->where('messageable_id', '!=', auth()->id())
                                        ->first()->messageable;
                                    
                                    // $lastMessage = $conversation->last_message->whereRelation([]""->where('id', '!=', auth()->id());
                                    
                                    $unreadMessagesCount = ChatFacade::conversation($conversation)
                                        ->setParticipant(auth()->user())
                                        ->unreadCount();
                                @endphp
                                <div wire:click="getConversationMessages({{ $conversation->id }})"
                                    class="chat_list @if ($conversationId == $conversation->id) active_chat @endif">
                                    <div class="chat_people d-flex">
                                        <div class="chat_img"> <img
                                                src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                                        </div>
                                        <div class="chat_ib mx-1 d-flex justify-content-between">
                                            <h5 class="text-black">
                                                {{ $participant->name }}
                                            </h5>
                                            @if ($unreadMessagesCount > 0)
                                                <span
                                                    style="border-radius: 30%;height:fit-content;width:fit-content;padding:10px"
                                                    class="bg-danger text-white">
                                                    {{ $unreadMessagesCount }}
                                                </span>
                                            @endif
                                            <span
                                                class="chat_date">{{ $conversation->created_at->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- <div class="chat_list">
                            <div class="chat_people d-flex">
                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                        alt="sunil"> </div>
                                <div class="chat_ib mx-1 d-flex justify-content-between">
                                    <h5 class="text-black">Sunil Rajput</h5>
                                    <span class="chat_date">Dec 25</span>
                                </div>
                            </div>
                        </div> --}}
                            {{-- <div class="chat_list">
                            <div class="chat_people">
                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                        alt="sunil"> </div>
                                <div class="chat_ib">
                                    <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                    <p>Test, which is a new approach to have all solutions
                                        astrology under one roof.</p>
                                </div>
                            </div>
                        </div>
                        <div class="chat_list">
                            <div class="chat_people">
                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                        alt="sunil"> </div>
                                <div class="chat_ib">
                                    <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                    <p>Test, which is a new approach to have all solutions
                                        astrology under one roof.</p>
                                </div>
                            </div>
                        </div>
                        <div class="chat_list">
                            <div class="chat_people">
                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                        alt="sunil"> </div>
                                <div class="chat_ib">
                                    <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                    <p>Test, which is a new approach to have all solutions
                                        astrology under one roof.</p>
                                </div>
                            </div>
                        </div>
                        <div class="chat_list">
                            <div class="chat_people">
                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                        alt="sunil"> </div>
                                <div class="chat_ib">
                                    <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                    <p>Test, which is a new approach to have all solutions
                                        astrology under one roof.</p>
                                </div>
                            </div>
                        </div>
                        <div class="chat_list">
                            <div class="chat_people">
                                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                        alt="sunil"> </div>
                                <div class="chat_ib">
                                    <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                                    <p>Test, which is a new approach to have all solutions
                                        astrology under one roof.</p>
                                </div>
                            </div>
                        </div> --}}
                        </div>
                    </div>
                    <div class="mesgs">
                        <div id="messages" wire:poll.5s="getConversationMessages()" class="msg_history">
                            @foreach ($chatMessages as $message)
                                @php
                                    $participation = $message->participation->messageable;
                                @endphp

                                @if ($participation->id != Auth::id())
                                    <div class="incoming_msg">
                                        <div class="incoming_msg_img">
                                            {{-- <img
                                            src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> --}}
                                            @if ($participation->hasRole('company'))
                                                <img onerror="this.src='https://ptetutorials.com/images/user-profile.png'"
                                                    src="{{ asset('storage/' . $participation->company->logo) }}"
                                                    alt="">
                                            @elseif ($participation->hasRole('landlord'))
                                                <img onerror="this.src='https://ptetutorials.com/images/user-profile.png'"
                                                    src="{{ asset('storage/' . $participation->landlord->photo) }}"
                                                    alt="">
                                            @elseif ($participation->hasRole('marketer'))
                                                <img onerror="this.src='https://ptetutorials.com/images/user-profile.png'"
                                                    src="{{ asset('storage/' . $participation->marketer->photo) }}"
                                                    alt="">
                                            @elseif($participation->hasRole('office'))
                                                <img onerror="this.src='https://ptetutorials.com/images/user-profile.png'"
                                                    src="{{ asset('storage/' . $participation->office->logo) }}"
                                                    alt="">
                                            @elseif($participation->hasRole('service-provider'))
                                                <img onerror="this.src='https://ptetutorials.com/images/user-profile.png'"
                                                    src="{{ asset('storage/' . $participation->serviceProvider->logo) }}"
                                                    alt="">
                                            @endif
                                        </div>
                                        <div class="received_msg">
                                            <div class="received_withd_msg">
                                                @if ($message->body != 'attachment')
                                                    <p>{{ $message->body }}</p>
                                                @endif
                                                @if ($message->data)
                                                    <img class="my-1" style="width: 100px;height:100px"
                                                        src="{{ asset('storage/' . $message->data['image']) }}"
                                                        alt="">
                                                @endif
                                                <span
                                                    class="time_date">{{ $message->created_at->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="outgoing_msg">
                                        <div class="sent_msg">
                                            @if ($message->body != 'attachment')
                                                <p>{{ $message->body }}</p>
                                            @endif
                                            @if ($message->data)
                                                <img class="my-1" style="width: 100px;height:100px"
                                                    src="{{ asset('storage/' . $message->data['image']) }}"
                                                    alt="">
                                            @endif

                                            <span class="time_date"> {{ $message->created_at->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                @endif

                                <script>
                                    let messages = document.getElementById('messages');
                                    messages.scrollTop = messages.scrollHeight;
                                </script>
                            @endforeach


                        </div>

                        <div class="type_msg">
                            <div class="input_msg_write">
                                {{-- <form id="send-message" method="POST" action="{{ route('user.chat.message.send') }}"> --}}
                                <input wire:keydown.enter="sendMessage()" wire:model.lazy="message" name="message"
                                    id="message" type="text" class="write_msg form-control"
                                    placeholder="Type a message" />
                                <input type="file" wire:model="image" id="image" />

                                {{-- <i id="image-attach" class="fa-solid fa-paperclip"></i> --}}

                                <button wire:click="sendMessage()" class="msg_send_btn" type="button"><i
                                        class="fa-solid fa-paper-plane"></i></button>
                                {{-- </form> --}}
                            </div>
                        </div>
                        {{-- @if ($image)
                            <div class="view-image my-3">
                                <img style="width: 100px;height:100px" src="{{ $image->temporaryUrl() }}"
                                    alt="">
                            </div>
                        @endif --}}
                    </div>
                </div>



                <p class="text-center top_spac"> Design by <a target="_blank"
                        href="https://www.linkedin.com/in/sunil-rajput-nattho-singh/">Sunil Rajput</a></p>

            </div>
            <script src="{{ asset('theme2/js/jquery-3.3.1.min.js') }}"></script>

            <script>
                $("#image-attach").on("click", function() {
                    $("#image").click();
                });
            </script>
        </div>
