<!-- Large modal -->
<form action="{{ route('admin.users.block') }}" method="POST">
    @csrf
    <style>
        .label-title {
            font-weight: bold;
            font-size: 20px
        }
    </style>
    <button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal"
        data-target=".blockUserModal{{ $user->id + 1 }}">{{ trans('user.block') }}</button>

    <div class="modal fade blockUserModal{{ $user->id + 1 }}" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ trans('keywords.block user') }}&ThinSpace;{{ $user->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group col-12">
                        <label class="label-title" for="period">{{ trans('keywords.period') }}:</label>
                        <input required type="number" value="" name="period" id="period"
                            class="form-control">
                        @error('period')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-12">
                        <label class="label-title" for="description">{{ trans('keywords.period type') }}:</label>
                        <select required class="form-control" name="period_type" id="period_type">
                            <option value="minute">{{ trans('keywords.minute') }}</option>
                            <option value="day">{{ trans('keywords.day') }}</option>
                        </select>
                        @error('period_type')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-12">
                        <label class="label-title" for="reason">{{ trans('keywords.reason') }}:</label>
                        <input required type="text" value="" name="reason" id="reason"
                            class="form-control">
                        @error('reason')
                            <div class="alert alert-danger text-center">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="text" hidden name="user_id" value="{{ $user->id }}">
                </div>
                <div class="modal-footer">
                    <button type="submit" type="button"
                        class="btn btn-danger">{{ trans('keywords.block user') }}</button>
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">{{ trans('keywords.Close') }}</button>
                </div>
            </div>
        </div>
    </div>

</form>
