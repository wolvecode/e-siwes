@props(['users' => $users, 'mail' => $mail, 'lecturers' => $lecturers, 'contact' => $contact])

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Page/</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Userlist</span>
        </div>
    </div>
    <div class="d-flex my-xl-auto right-content">
        <div class="pr-1 mb-3 mb-xl-0">
            <button type="button" class="btn btn-info btn-icon mr-2"><i class="mdi mdi-filter-variant"></i></button>
        </div>
        <div class="pr-1 mb-3 mb-xl-0">
            <button type="button" class="btn btn-danger btn-icon mr-2"><i class="mdi mdi-star"></i></button>
        </div>
        <div class="pr-1 mb-3 mb-xl-0">
            <button type="button" class="btn btn-warning  btn-icon mr-2"><i class="mdi mdi-refresh"></i></button>
        </div>
        <div class="mb-3 mb-xl-0">
            <div class="btn-group dropdown">
                <button type="button" class="btn btn-primary">{{now()->format("F j, Y")}}</button>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb -->
<!--div-->
<div class="col-xl-12">
    <div class="card mg-b-20">
{{--        <div class="card-header pb-0">--}}
{{--            <div class="d-flex justify-content-between">--}}
{{--                <i class="mdi mdi-dots-horizontal text-gray"></i>--}}
{{--            </div>--}}
{{--            <p class="tx-12 tx-gray-500 mb-2">Example of Valex Bordered Table.. <a href="">Learn more</a></p>--}}
{{--        </div>--}}
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{ route('assignAll')}}" method="post" id="assignment">
                    @csrf
                    @method('PATCH')
                    @if($lecturers)
                        <input type="hidden" name="students_id" id="students_id">
                        <x-modal-table :lecturers="$lecturers"/>
                        {{--                    Show button to delete and assign and trigger modal to display--}}
                        <div class="mb-2">
                            <a class="btn btn-primary model-effect"  data-effect="effect-flip-horizontal" data-toggle="modal"href="#modaldemo8">Assign All</a>
                            <a class="  " href="{{ route('deleteStudent') }}">Delete All</a>
                        </div>
                    @endif
                    <table id="example" class="table key-buttons text-md-nowrap">
                        <thead>
                            <tr>
                                <th class="border-bottom-0"><span>Mark</span></th>
                                <th class="border-bottom-0"><span>Name</span></th>
                                @if($mail)
                                    <th class="border-bottom-0"><span>Email</span></th>
                                @endif
                                @if($contact)
                                    <th class="border-bottom-0"><span>Contact</span></th>
                                @endif

                                @if(!$mail)
                                    <th class="border-bottom-0"><span>Matric_No</span></th>
                                    <th class="border-bottom-0"><span>Supervisor Name</span></th>
                                @endif
                                <th class="border-bottom-0"><span>Created</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr id="tr_{{$user->id}}">
                                    <td>
                                        <div class="checkbox">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" value="{{$user->id}}" name="user_id[]"  class="custom-control-input" id="{{ $user->id }}"/>
                                                <label for="{{$user->id}}" class="custom-control-label mt-1"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                       {{ $user->name }}
                                    </td>
                                    @if($mail)
                                        <td>{{ $user->email }}</td>
                                    @endif
                                    @if($contact)
                                        <td>{{ $user->contact }}</td>
                                    @endif
                                    @if(!$mail)
                                        <td>{{ $user->matric_no }}</td>
                                        <td> {{ $user->supervisor ? $user->supervisor->name : '--' }} </td>
                                    @endif
                                    <td>{{ $user->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
<!--/div-->
@push('css')
    <!-- Internal Data table css -->
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet"/>
{{--    <link href="../../assets/plugins/datatable/css/jquery.dataTables.min.css" rel="stylesheet"/>--}}
    <link href="{{ asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet"/>
@endpush

@push('scripts')

    <!-- Internal Data tables -->
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
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

    <script>
        let students = [];

        document.querySelectorAll("input[type='checkbox']").forEach((elm) => elm.addEventListener('change', function() {
            const id = this.getAttribute('id');
            if (this.checked && ! students.includes(id)) {
                students.push(id)
            } else {
                students = students.filter((i) => i !== id)
            }
        }));

        document.querySelector('form#assignment').addEventListener('submit', function(event) {
            event.preventDefault();
            document.getElementById('students_id').value = JSON.stringify(students);

            this.submit();
        })
    </script>
@endpush
