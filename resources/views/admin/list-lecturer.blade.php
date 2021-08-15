@extends('layouts.master')

@section('title', 'Log into your account')

@section('content')
    <x-list-user :users="$users"/>
@endsection
