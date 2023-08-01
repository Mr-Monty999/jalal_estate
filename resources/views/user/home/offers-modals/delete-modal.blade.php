     @if ($landOffer->user_id == auth()->id())
         @can('delete_offers')
             <div class="mx-1">
                 <button type="button" class="btn btn-danger" data-toggle="modal"
                     data-target="#deleteOfferModal{{ $landOffer->id }}">
                     {{ trans('keywords.Delete') }}
                 </button>
                 <div class="modal fade" id="deleteOfferModal{{ $landOffer->id }}" tabindex="-1" role="dialog"
                     aria-labelledby="deleteOfferModal{{ $landOffer->id }}Label" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="deleteOfferModal{{ $landOffer->id }}Label">
                                     {{ trans('keywords.Delete') }}
                                 </h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                                 <h5>{{ trans('keywords.are you sure want to delete this offer?') }}
                                 </h5>
                             </div>
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary mx-1"
                                     data-dismiss="modal">{{ trans('keywords.No') }}</button>
                                 <form method="POST" action="{{ route('user.land-offers.destroy', $landOffer->id) }}">
                                     @csrf
                                     @method('delete')
                                     <button type="submit" class="btn btn-danger mx-1">{{ trans('keywords.Yes') }}</button>
                                 </form>
                             </div>
                         </div>

                     </div>
                 </div>
             </div>
         @endcan
     @endif
