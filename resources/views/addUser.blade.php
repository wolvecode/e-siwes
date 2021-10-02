@extends('layouts.master')

@section('title', 'Add admin/supervisor')

@section('content')
    <x-form :name="'for Admin/Lecturer'" :sessions="false" :na="false" :matric="false" :type="'email'" :role="true" :action="'addUser'"/>
@endsection
