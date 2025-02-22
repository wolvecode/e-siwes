@props(['name', 'type', 'role', 'action', 'na', 'sessions'])

<div class="row mg-t-60">
    <div class="col-md-8">
        <form action="{{ route('fileRegister') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="modal" id="modalQuill">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="mb-4 main-content-label mx-4  mt-4">Upload file to register multiple student</div>
                        <div class="form-group ">
                            <div class="row mx-4">
                                <div class="col-md-3">
                                    <label class="form-label">Placement letter <i>(required)</i></label>
                                </div>
                                <div class="col-md-9">
                                    <input type="file" name="attachment" class="dropify" data-height="150"
                                        required />
                                </div>
                                @error('attachment')
                                    <div class="alert alert-danger  mg-b-0" role="alert">
                                        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit placement
                                request</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @if ($na)
        <div class="card-header ml-3 pb-0">
            <p class="tx-14 tx-gray-500 mb-2">You can add multiple students by clicking <strong><a
                        data-effect="effect-fall" data-target="#modalQuill" data-toggle="modal"
                        href="{{ route('application') }}">here</a></strong> <i>Note:</i> file upload must be excel or
                csv file</p>
        </div>
    @endif
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <div class="d-flex flex-row ">
            <div class="card  box-shadow-0">
                <div class="card-header">
                    <h4 class="card-title mb-1">Add {{ $name }}</h4>
                    <p class="mb-2">Generate login for {{ $name }} ({{ $type }} and password for
                        login)</p>
                </div>
                <div class="card-body pt-0">
                    <form action="{{ route($action) }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="inputName" placeholder="Name"
                                value="{{ old('name') }}">
                        </div>
                        @error('name')
                            <div class="alert alert-danger  mg-b-0" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $message }}
                            </div>
                        @enderror
                        {{--                            @if (!$na) --}}
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="inputEmail3"
                                placeholder="Enter email" value="{{ old('email') }}">
                        </div>
                        @error('email')
                            <div class="alert alert-danger  mg-b-0" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $message }}
                            </div>
                        @enderror
                        {{--                            @endif --}}
                        @if ($na)
                            <x-matric :type="'matric_no'" :na="true" :action="'addStudent'" />
                            <x-session :sessions="$sessions" />
                        @endif

                        @if ($role)
                            <x-role />
                        @endif
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" id="inputPassword3"
                                placeholder="Password">
                        </div>
                        @error('password')
                            <div class="alert alert-danger  mg-b-0" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="form-group">
                            <input type="password" name="password_confirmation" class="form-control" id="inputPassword3"
                                placeholder="Confirm Password">
                        </div>
                        @error('password_confirmation')
                            <div class="alert alert-danger  mg-b-0" role="alert">
                                <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="form-group mb-0 mt-3 justify-content-end">
                            <div>
                                <button type="submit" class="btn btn-primary">Add {{ $name }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
    <script src="{{ asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ asset('assets/js/table-data.js') }}"></script>
    <!--Internal Fileuploads js-->
    <script src="{{ asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.4/js/froala_editor.min.js"
        integrity="sha512-CLb49GjVXA3PKrmkC+LfLTfU5gQjrS5dtI4KRxdu/h79DHvz7m2PQnpQI0Im7GSw1KBRmaO2tCGqsuqOTuGoHw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const quill = new FroalaEditor('#editor', {
            height: '150px'
        })
    </script>
@endpush

@push('css')
    <!-- Internal Data table css -->
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    {{--    <link href="{{ asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

    {{--    fileupload --}}
    <link href="{{ asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.4/css/froala_editor.min.css"
        integrity="sha512-ssmgHpB90upcc3tJZuL9zXUcAQn9j40MBRBlPt5FTvlJCDSwByyYWsv9TWH/tV6Ry154FQE93pA5bk31XOWb8Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
