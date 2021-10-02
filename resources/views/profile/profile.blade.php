@extends('layouts.master')

@section('title', 'Log into your account')

@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, welcome back!</h2>
            </div>
        </div>
    </div>
    <!-- row -->
    <div class="row row-sm">
        @auth("user")
            <x-profile :user="@auth('user')"/>
        @endauth
        @auth("student")
            <x-profile :user="@auth('student')"/>
        @endauth

    </div>
    <!-- row closed -->
@endsection
