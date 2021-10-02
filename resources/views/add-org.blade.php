@extends('layouts.master')

@section('title', 'Add organization')

@section('content')
    <!-- row -->
    <div class="row row-sm mg-t-60">
        <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
            <div class="card  box-shadow-0">
                <div class="card-header">
                    <p class="mb-2"> Add organization ( Only website and contact are optional)</p>
                </div>
                <div class="card-body pt-0">
                    <form class="form-horizontal" method="post" action="{{ route('addOrganization') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="inputName" placeholder="Name" value="{{ old('name') }}">
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
                            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" value="{{ old('email') }}">
                        </div>
                        @error('email')
                        <div class="alert alert-danger  mg-b-0" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{$message}}
                        </div>
                        @enderror
                        <div class="form-group">
                            <input type="text" name="website" class="form-control" id="inputEmail3" placeholder="website (Optional)" value="{{ old('website') }}">
                        </div>
                        @error('website')
                        <div class="alert alert-danger  mg-b-0" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{$message}}
                        </div>
                        @enderror
                        <div class="form-group">
                            <select name="state" class="form-control select2-no-search js-states">
                                <option label="Select state"></option>
                            </select>
                        </div>
                        @error('state')
                        <div class="alert alert-danger  mg-b-0" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{$message}}
                        </div>
                        @enderror
                        <div class="form-group">
                            <select name="city" class="form-control select2-no-search js-lga">
                                <option label="select city"></option>
                            </select>
                        </div>
                        @error('city')
                        <div class="alert alert-danger  mg-b-0" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{$message}}
                        </div>
                        @enderror
                        <div class="form-group">
                            <input type="text" name="address" class="form-control" id="inputEmail3" placeholder="Address" value="{{ old('address') }}">
                        </div>
                        @error('address')
                        <div class="alert alert-danger  mg-b-0" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{$message}}
                        </div>
                        @enderror
                        <div class="form-group">
                            <input type="tel" name="contact" class="form-control" id="inputEmail3" placeholder="contact" value="{{ old('contact') }}">
                        </div>
                        @error('contact')
                        <div class="alert alert-danger  mg-b-0" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{$message}}
                        </div>
                        @enderror
                        <div class="form-group mb-0 mt-3 justify-content-end">
                            <div>
                                <button type="submit" class="btn btn-primary">Add organization</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- row -->
@endsection

@push('scripts')
    <script src="{{ asset('js/state.js') }}"></script>
    <script>
        var states = Object.keys(STATE).map(function (state){
            return "<option value='" + state +"'>"+ state +"</option>"
        }).join('\n');

        $('.js-states').html('<option> Select your state...</option>' + states)

        $('.js-states').on('change', function (){
            var selected = $(this).find(':selected').text();
            if (!STATE[selected]) return;
            var locals = STATE[selected].map(function(local) {
                return `<option value='${local}'>${local}</option>`;
            }).join('\n');

            $('.js-lga').html('<option>Pick City/LGA</option>' + locals);
        });

        // $('.js-states').html(Object.keys(STATE)
        //     .map(state => `<option value="${state}">${state}</option>`)
        //     .join('')
        // );
        // $.(#state)
    </script>
@endpush
