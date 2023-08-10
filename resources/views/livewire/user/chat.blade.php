    <div class="container">
        <h3 class=" text-center">Messaging</h3>
        <div class="messaging">
            <div class="inbox_msg d-flex">
                <div class="inbox_people">
                    <div class="headind_srch">
                        <div class="recent_heading">
                            <h4>Recent</h4>
                        </div>
                        <div class="srch_bar">
                            <div class="stylish-input-group">
                                <input type="text" class="search-bar" placeholder="Search">
                                <span class="input-group-addon">
                                    <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div wire:poll="getConversations()" class="inbox_chat">
                        @foreach ($conversations as $index => $conversation)
                            @php
                                $conversation = $conversation->conversation;
                                $participant = $conversation
                                    ->participants()
                                    ->where('messageable_id', '!=', auth()->id())
                                    ->first()->messageable;
                                
                                // $lastMessage = $conversation->last_message->whereRelation([]""->where('id', '!=', auth()->id());
                                
                            @endphp
                            <div wire:click="getConversationMessages({{ $conversation->id }})"
                                class="chat_list active_chat">
                                <div class="chat_people d-flex">
                                    <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png"
                                            alt="sunil"> </div>
                                    <div class="chat_ib mx-1 d-flex justify-content-between">
                                        <h5 class="text-black">
                                            {{ $participant->name }}
                                        </h5>
                                        <span class="chat_date">{{ $conversation->created_at->diffForHumans() }}</span>
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
                    <div wire:poll="getConversationMessages()" class="msg_history">
                        @foreach ($chatMessages as $message)
                            @if ($message->sender_id == Auth::id())
                                <div class="incoming_msg">
                                    <div class="incoming_msg_img"> <img
                                            src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                                    </div>
                                    <div class="received_msg">
                                        <div class="received_withd_msg">
                                            <p>{{ $message->body }}</p>
                                            <span class="time_date">{{ $message->created_at->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="outgoing_msg">
                                    <div class="sent_msg">
                                        <p>{{ $message->body }}</p>
                                        <span class="time_date"> {{ $message->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                            @endif
                        @endforeach


                    </div>
                    <div class="type_msg">
                        <div class="input_msg_write">
                            {{-- <form id="send-message" method="POST" action="{{ route('user.chat.message.send') }}"> --}}
                            <input wire:model.lazy="message" name="message" id="message" type="text"
                                class="write_msg" placeholder="Type a message" />
                            <button wire:click="sendMessage()" class="msg_send_btn" type="button"><i
                                    class="fa-solid fa-paper-plane"></i></button>
                            {{-- </form> --}}
                        </div>
                    </div>
                </div>
            </div>


            <p class="text-center top_spac"> Design by <a target="_blank"
                    href="https://www.linkedin.com/in/sunil-rajput-nattho-singh/">Sunil Rajput</a></p>

        </div>
    </div>
