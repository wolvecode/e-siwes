@extends('layouts.master')

@section('title', 'Lecturer list')

@section('content')
    <x-list-user :users="$users" :mail="true" :contact="false" :lecturers="false"/>
@endsection
