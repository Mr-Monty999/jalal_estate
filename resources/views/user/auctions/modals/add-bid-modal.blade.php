                        @if ($auction->user_id != auth()->id())
                            @can('view_auctions')
                                {{-- begin Modal --}}
                                <div class="my-1">
                                    <!-- Button trigger modal -->
                                    <button id="open-modal-button" type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#addBidModal">
                                        {{ trans('keywords.bid') }}
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="addBidModal" tabindex="-1" role="dialog"
                                        aria-labelledby="addBidModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form method="POST"
                                                action="{{ route('user.auctions.bid.store', $auction->id) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="addBidModalLabel">
                                                            {{ trans('keywords.add bid') }}
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="form-group col-12">
                                                                <label for="price">{{ trans('keywords.price') }}</label>
                                                                <input name="price" type="number" class="form-control"
                                                                    id="price">
                                                                @error('price')
                                                                    <div style="border-radius: 30px"
                                                                        class="alert alert-danger text-center mt-1">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary mx-1"
                                                            data-dismiss="modal">{{ trans('keywords.Cancel') }}</button>
                                                        <button type="submit"
                                                            class="btn btn-primary">{{ trans('keywords.bid') }}</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                {{-- End Modal  --}}
                            @endcan
                        @endif
