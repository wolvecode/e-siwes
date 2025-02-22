@extends('layouts.master')

@section('title', 'List students')

@section('content')
    <x-list-user :users="$users" :mail="false" :contact="false" :lecturers="$lecturers" />
@endsection
