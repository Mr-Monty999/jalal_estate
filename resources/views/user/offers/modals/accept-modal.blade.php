     @if ($landOffer->user_id != auth()->id())
         @can('accept_offers')
             <div class="mx-1">
                 <button type="button" class="btn btn-success text-white" data-toggle="modal"
                     data-target="#acceptOffersModal{{ $landOffer->id }}">
                     {{ trans('keywords.Accept') }}
                 </button>
                 <div class="modal fade" id="acceptOffersModal{{ $landOffer->id }}" tabindex="-1" role="dialog"
                     aria-labelledby="acceptOffersModal{{ $landOffer->id }}Label" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="acceptOffersModal{{ $landOffer->id }}Label">
                                     {{ trans('keywords.Delete') }}
                                 </h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                                 <h5>{{ trans('keywords.are you sure want to accept this offer?') }}
                                 </h5>
                             </div>
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary mx-1"
                                     data-dismiss="modal">{{ trans('keywords.Cancel') }}</button>
                                 <form method="POST" action="{{ route('user.land-offers.accept', $landOffer->id) }}">
                                     @csrf
                                     <button type="submit"
                                         class="btn btn-success mx-1">{{ trans('keywords.Accept') }}</button>
                                 </form>
                             </div>
                         </div>

                     </div>
                 </div>
             </div>
         @endcan
     @endif
