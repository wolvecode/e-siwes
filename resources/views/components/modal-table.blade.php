@props(['lecturers' => $lecturers])
<!-- Modal effects -->
<div class="modal" id="modaldemo8">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Choose Lecturer</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h6>Select a lecturer to assign to</h6>
                <table class="table key-buttons text-md-nowrap">
                    <thead>
                    <tr>
                        <th class="border-bottom-0"><span>Mark</span></th>
                        <th class="border-bottom-0"><span>Name</span></th>
                        <th class="border-bottom-0"><span>Lecturer</span></th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($lecturers as $lecturer)
                        <tr id="tr_{{$lecturer->id}}">
                            <td>
                                <div class="checkbox">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" value="{{$lecturer->id}}" name="lecturer"  class="custom-control-input" id="{{ $lecturer->id }}">
                                        <label for="{{$lecturer->id}}" class="custom-control-label mt-1"></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                {{ $lecturer->name }}
                            </td>
                            <td>{{ $lecturer->email }}</td>
                        </tr>
                    @empty
                        <p>No Data Available</p>
                    @endforelse
                    </tbody>
                    {{ $lecturers->links() }}
                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit">Save changes</button>
                <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
            </div>
        </div>
    </div>
</div>
