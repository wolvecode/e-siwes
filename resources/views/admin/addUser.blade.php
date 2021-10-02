@extends('layouts.master')

@section('title', 'Log into your account')

@section('content')
   @auth('admin')
       <div class="row mg-t-60">
           <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
               <div class="d-flex flex-row justify-content-center">
                   <div class="card  box-shadow-0">
                       <div class="card-header">
                           <h4 class="card-title mb-1">Add Student</h4>
                           <p class="mb-2">Generate login for student using their matriculation number</p>
                       </div>
                       <div class="card-body pt-0">
                           <form class="form-horizontal" >
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
                                   <input type="email" name="matric_no" class="form-control" id="inputEmail3" placeholder="Matric_no" value="{{ old('matric_no') }}">
                               </div>
                               @error('matric_no')
                               <div class="alert alert-danger  mg-b-0" role="alert">
                                   <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                                   {{$message}}
                               </div>
                               @enderror
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
   @endauth
@endsection
