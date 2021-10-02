@extends('layouts.master')

@section('title', 'report')

@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Student Report List</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="pr-1 mb-3 mb-xl-0">
                <button type="button" class="btn btn-warning  btn-icon mr-2"><i class="mdi mdi-refresh"></i></button>
            </div>
            <div class="mb-3 mb-xl-0">
                <div class="btn-group ">
                    <button type="button" class="btn btn-primary">{{date("F j, Y")}}</button>
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
{{--                            <div class="ml-auto text-muted">--}}
{{--                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="las la-pen"></i></a>--}}
{{--                                <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="far fa-thumbs-up"></i></a>--}}
{{--                            </div>--}}
                        </div>
                    @empty
                        <p>You have make no report</p>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Col -->
        <div class="col-lg-7">
            <div class="card card-aside custom-card">
                <div class="card-body d-flex flex-column">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0">Report List</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <p class="tx-14 tx-gray-500 mb-2"> <i class="txt-18">Note:</i> Attach document will be open in new tab for user convenience</p>
                    </div>
                    @forelse($reports as $report)
                        <div class="d-flex align-items-center pt-3 mt-auto">
                            <div class="main-img-user avatar-sm mr-3">
                                <i class="icon ion-md-paper"></i>
                            </div>
                            <div>
                                <p > {!! $report->content !!}</p>
                            </div>
                            <div class="ml-auto text-muted d-flex">
                                <form action="{{ route('viewReport',  $report->id) }}" method="post">
                                    @csrf
                                    @method('patch')
                                    @if( $report->view == true)
                                        <a class="btn btn-outline-primary bd bd-0 disabled">{!! $report->view == true ?  '<i class="far fa-eye"></i>' : '<i class="far fa-eye-slash"></i>' !!}</a>
                                    @else
                                        <a class="btn btn-outline-success bd bd-0" href="{{ route('displayImage',$report->attachment) }}" target="_blank">
                                            <i class="far fa-file-alt"></i>
                                        </a>
                                        <button class="btn btn-outline-primary bd bd-0">{!! $report->view == true ?  '<i class="far fa-eye"></i>' : '<i class="far fa-eye-slash"></i>' !!}</button>
                                    @endif
                                </form>
                            </div>
                        </div>
                    @empty
                        <p>User have make no report</p>
                    @endforelse
                </div>
            </div>
        </div>
        <!-- /Col -->
    </div>
    <!-- row closed -->
@endsection

@push('css')
    <!-- Internal Modal js-->
    <script src="{{ asset('assets/js/modal.js') }}"></script>
@endpush

