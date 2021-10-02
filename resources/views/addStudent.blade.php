@extends('layouts.master')

@section('title', 'Add student')

@section('content')
    <x-form :name="'Student'" :na="true" :type="'matric_no'" :role="false" :action="'addStudent'" :sessions="$sessions"/>
@endsection
