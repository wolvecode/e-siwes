@extends('layouts.master')

@section('title', 'Add supervisor')

@section('content')
    <x-form :name="'Lecturer'" :na="false" :type="'email'" :role="false" :action="'addLecturer'" :sessions="false" />
@endsection
