                        @if ($auction->user_id == auth()->id() && $auction->status == 'active')
                            {{-- begin Modal --}}
                            <div class="my-1">
                                <!-- Button trigger modal -->
                                <button id="open-modal-button" type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#endAuctionModal{{ $auction->id }}">
                                    {{ trans('keywords.end') }}
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="endAuctionModal{{ $auction->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="endAuctionModal{{ $auction->id }}Label"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form method="POST" action="{{ route('user.auctions.end', $auction->id) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        id="endAuctionModal{{ $auction->id }}Label">
                                                        {{ trans('keywords.end auction') }}
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h3>{{ trans('keywords.are sure want to end this auction?') }}
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary mx-1"
                                                        data-dismiss="modal">{{ trans('keywords.Cancel') }}</button>
                                                    <button type="submit"
                                                        class="btn btn-primary">{{ trans('keywords.Yes') }}</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            {{-- End Modal  --}}
                        @endif
