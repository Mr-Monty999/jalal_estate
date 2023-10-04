<!-- Large modal -->
<style>
    .label-title {
        font-weight: bold;
        font-size: 20px
    }
</style>
<button type="button" class="btn btn-primary" data-toggle="modal"
    data-target=".complaintModal{{ $complaint->id + 1 }}">{{ trans('keywords.View') }}</button>

<div class="modal fade complaintModal{{ $complaint->id + 1 }}" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ trans('keywords.complaint number') }}&ThinSpace;{{ $complaint->id }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div style="margin-bottom: 33px">
                    @if ($complaint->status == 'open')
                        <h1 class="text-success text-center">
                            {{ trans('keywords.open') }}
                        </h1>
                    @else
                        <h1 class="text-danger text-center">
                            {{ trans('keywords.closed') }}
                        </h1>
                    @endif
                </div>
                <div class="form-group col-12">
                    <label class="label-title" for="title">{{ trans('keywords.complaint title') }}:</label>
                    <input type="text" value="{{ $complaint->title }}" name="title" id="title"
                        class="form-control" readonly>
                </div>
                <div class="form-group col-12">
                    <label class="label-title" for="description">{{ trans('keywords.description') }}:</label>
                    <textarea name="description" class="form-control" id="description" rows="7">{{ $complaint->description }}</textarea>
                </div>
                <div class="form-group col-12">
                    <label class="label-title" for="contact_info">{{ trans('keywords.phone number') }}:</label>
                    <input type="text" value="{{ $complaint->contact_info }}" name="contact_info" id="contact_info"
                        class="form-control" readonly>
                </div>
                <div class="form-group col-12 d-flex flex-column">
                    <label class="label-title" for="attachment">{{ trans('keywords.attachments') }}:</label>
                    @if ($complaint->attachment)
                        <a href="{{ asset('storage/' . $complaint->attachment) }}"
                            target="_blank">{{ basename(storage_path($complaint->attachment)) }}</a>
                    @else
                        <h5>{{ trans('keywords.None') }}</h5>
                    @endif

                </div>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
            </div> --}}
        </div>
    </div>
</div>
