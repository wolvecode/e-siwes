@extends('layouts.master')

@section('title', 'Organization list')

@section('content')
    <div class="row row-sm">
        <!--div-->
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">ORGANIZATION Table</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table key-buttons text-md-nowrap">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">Name</th>
                                <th class="border-bottom-0">Contact</th>
                                <th class="border-bottom-0">Website</th>
                                <th class="border-bottom-0">email</th>
                                <th class="border-bottom-0">Created</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($organizations as $organization)
                                <tr>
                                    <td>{{ $organization->name }}</td>
                                    <td>{{ $organization->contact }}</td>
                                    <td>{{ $organization->website ? $organization->website : '--'  }}</td>
                                    <td>{{ $organization->email ? $organization->email : '--' }}</td>
                                    <td>{{ $organization->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->
    </div>

    @push('scripts')
        <!-- Internal Data tables -->
        <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>

        <!--Internal  Datatable js -->
        <script src="{{ asset('assets/js/table-data.js') }}"></script>
    @endpush
@endsection
