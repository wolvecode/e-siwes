@extends('layouts.master')

@section('title', 'Organization list')

@section('content')
    <x-list-user :users="$organizations" :mail="true" :lecturers="false" :contact="true"/>
@endsection
