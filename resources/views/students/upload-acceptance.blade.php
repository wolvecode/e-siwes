@extends('layouts.master')

@section('title', 'report')

@section('content')
    <div class="col-md-7">
        <div class="card  box-shadow-0">
            <div class="card-header">
                <h4 class="card-title mb-1">Upload Acceptance</h4>
                <p class="mb-2">Select company that issue placement acceptance from the form</p>
            </div>
            <div class="card-body pt-0">
                <form action="{{ route('uploadAcceptance') }}" enctype="multipart/form-data" method="post" class="form-horizontal" >
                    @csrf
                    <div class="form-group ql-wrapper ql-wrapper-demo bg-gray-100">
                        <textarea id="editor" name="description" cols="100" rows="10" value="{{ old('description') }}" required></textarea>
                    </div>
                    @error('description')
                    <div class="alert alert-danger  mg-b-0" role="alert">
                        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{$message}}
                    </div>
                    @enderror
                    <div class="form-group">
                        <select name="organization_id" class="form-control select2" style="width: 75%;" placeholder="Select Company" required>
                            @foreach($organizations as $organization)
                                <option value="{{ $organization->id }}">
                                   {{ $organization->name }} ( {{$organization->state}}, {{$organization->city}} )
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('organization_id')
                    <div class="alert alert-danger  mg-b-0" role="alert">
                        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{$message}}
                    </div>
                    @enderror
                    <div class="form-group">
                        <input type="file" name="attachment" class="dropify" data-height="150" required/>
                    </div>
                    @error('attachment')
                    <div class="alert alert-danger  mg-b-0" role="alert">
                        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{$message}}
                    </div>
                    @enderror
                    <div class="form-group mb-0 mt-3 justify-content-end">
                        <div>
                            <button type="submit" class="btn btn-primary">Upload Acceptance</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

    <!-- JQuery min js -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/p-scroll.js')}}"></script>
    <script src="{{ asset('assets/js/form-editor.js') }}"></script>
    <script src="{{ asset('assets/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>
    <!--Internal Fileuploads js-->
    <script src="{{ asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.4/js/froala_editor.min.js" integrity="sha512-CLb49GjVXA3PKrmkC+LfLTfU5gQjrS5dtI4KRxdu/h79DHvz7m2PQnpQI0Im7GSw1KBRmaO2tCGqsuqOTuGoHw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script>
        const quill = new FroalaEditor('#editor', { height: '200px'})
        $('.select2').select2({
            placeholder: "Select a company",
            allowClear: true,
            theme: "classic",
        });
    </script>
    <!-- Internal Select2.min js -->
@endpush

@push('css')
    <link href="{{ asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.4/css/froala_editor.min.css"
          integrity="sha512-ssmgHpB90upcc3tJZuL9zXUcAQn9j40MBRBlPt5FTvlJCDSwByyYWsv9TWH/tV6Ry154FQE93pA5bk31XOWb8Q=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Internal Select2 css -->
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endpush

