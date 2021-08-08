
<div class="form-group">
    <select name="role" class="form-control select2-no-search">
        <option label="select role">
        </option>
        <option value="2">
            Admin
        </option>
        <option value="3">
            Lecturer
        </option>
    </select>
</div>
@error('role')
<div class="alert alert-danger  mg-b-0" role="alert">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
    {{$message}}
</div>
@enderror
