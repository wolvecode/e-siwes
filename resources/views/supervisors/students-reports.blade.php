@extends('layouts.master')

@section('title', 'report')

@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Edit-Profile</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-warning  btn-icon mr-2"><i class="mdi mdi-refresh"></i></button>
            </div>
            <div class="mb-3 mb-xl-0">
                <div class="btn-group ">
                    <button type="button" class="btn btn-primary">{{ date("j F, Y") }}</button>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->

    <!-- row -->
    <div class="row row-sm">
        <!-- Col -->
        <div class="col-lg-5">
            <div class="card card-aside custom-card">
                <div class="card-body d-flex flex-column">
                    <h4><a href="#" class="card-title">Your Student List</a></h4>
                    @forelse($students as $student)
                        <div class="d-flex align-items-center pt-3 mt-auto">
                            <div class="main-img-user avatar-sm mr-3">
                                <i class="icon ion-md-paper"></i>
                            </div>
                            <div>
                                <a href="{{route('reports.show', $student->id)}}" class="text-default">{{ $student->name}}</a>
                                <small class="d-block text-muted">{{ $student->matric_no }}</small>
                            </div>
                        </div>
                    @empty
                        <p>You have make no report</p>
                    @endforelse
                </div>
            </div>
        </div>
        <!-- /Col -->
    </div>
    <!-- row closed -->
@endsection
