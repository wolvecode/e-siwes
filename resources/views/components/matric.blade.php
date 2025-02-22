@props(['type', 'action', 'na'])

<div class="form-group">
    <input type="text" name="{{ $type }}" class="form-control" id="inputEmail3" placeholder="{{ $type }}"
        value="{{ old($type) }}">
</div>
@error($type)
    <div class="alert alert-danger  mg-b-0" role="alert">
        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
        {{ $message }}
    </div>
@enderror
