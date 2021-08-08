@props(['name' => $name, 'type' => $type, 'role' => $role, 'action' => $action])

<div class="row mg-t-60">
        <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
            <div class="d-flex flex-row ">
                <div class="card  box-shadow-0">
                    @if(session('status'))
                        <div class="alert alert-success mg-b-0" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong> Success: </strong> {{session('status')}}.
                        </div>
                    @endif
                    <div class="card-header">
                        <h4 class="card-title mb-1">Add Student</h4>
                        <p class="mb-2">Generate login for {{ $name }} ({{$type}} and password for login)</p>
                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ route($action) }}" method="post" class="form-horizontal" >
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="inputName" placeholder="Name" value="{{old('name')}}">
                            </div>
                            @error('name')
                            <div class="alert alert-danger  mg-b-0" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{$message}}
                            </div>
                            @enderror
                            <div class="form-group">
                                <input type="text" name="{{$type}}" class="form-control" id="inputEmail3" placeholder="{{$type}}" value="{{ old($type) }}">
                            </div>
                            @error('email')
                            <div class="alert alert-danger  mg-b-0" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{$message}}
                            </div>
                            @enderror
                            @if($role)
                                <x-role />
                            @endif
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                            @error('password')
                            <div class="alert alert-danger  mg-b-0" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{$message}}
                            </div>
                            @enderror
                            <div class="form-group">
                                <input type="password" name="password_confirmation" class="form-control" id="inputPassword3" placeholder="Confirm Password">
                            </div>
                            @error('password_confirmation')
                            <div class="alert alert-danger  mg-b-0" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{$message}}
                            </div>
                            @enderror
                            <div class="form-group mb-0 mt-3 justify-content-end">
                                <div>
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

