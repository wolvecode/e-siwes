@extends('layouts.master')

@section('title', 'Log into your account')

@section('content')
    <x-form :name="'for Admin'" :type="'email'" :role="false" :action="'addAdmin'"/>
@endsection
