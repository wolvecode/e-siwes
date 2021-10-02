@props(['sessions' => $sessions])


<div class="form-group">
    <select name="session_id" class="form-control select2-no-search">
        <option label="select session">
        </option>
        @foreach($sessions as $session)
            <option value="{{$session->id}}">
               {{ $session->year }}
            </option>
        @endforeach
    </select>
</div>
@error('session_id')
<div class="alert alert-danger  mg-b-0" role="alert">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
    {{$message}}
</div>
@enderror
