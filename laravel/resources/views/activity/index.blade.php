@extends('layouts.app')

@section('content')
@include('users.partials.header', [
        'title' => 'Activities'
        ])

        <div class="container-fluid mt--7">
            <div class="text-end mb-3 me-3">
                <a href="{{ route('activity.create') }}" class="btn btn-success waves-effect waves-light">
                    <i class="fas fa-plus me-2"></i>
                    Add New Activity</a>
            </div>

            <div class="row">
                <div class="col-12 order-xl-1">
                    <div class="card bg-default shadow">
                        <div class="card-body">
                            <div class="table-responsive py-4">
                                <table class="table table-bordered table-dark" id="activity-datatable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Activity Name</th>
                                            <th>Details</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($act as $key=>$a)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{$a->name}}</td>
                                            <td>{{$a->details}}</td>
                                            <td class="td-actions text-right">
                                                <form action="{{ route('activity.create')}}" method="POST">
                                                    @csrf
                                                    @method('delete')

                                                    <a rel="tooltip" class="edit btn btn-primary btn-sm" href="{{ route('activity.edit', ['id' => $a->id])}}">
                                                        Edit
                                                    </a>
                                                    <a type="button" class="delete btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to remove this activity?')" href="{{ route('activity.delete', [ 'id' => $a->id ]) }}">
                                                        Delete
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('script')
<script>
function padam(id) {
    Swal.fire({
        icon: 'info',
        title: 'Are you sure to delete this activity?',
        showCancelButton: true,
        confirmButtonText: 'Yes, Proceed.',
        cancelButtonText: `Cancel`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
                url: "{{ url('activity.delete') }}/"+ id ,
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log(response.success)

                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Activity successfully deleted.',
                            showCancelButton: false,
                            confirmButtonText: 'Ok',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        })
                    } else {
                        console.log(response)
                        Swal.fire('Failed', response.message, 'error');
                    }
                }
            })
        }
    })
}

</script>


@if ($message = Session::get('success'))
<script>
Swal.fire({
    text: "{{ $message }}",
    icon: "success",
    confirmButtonText: "Ok",
    customClass: {
        confirmButton: "btn btn-primary",
    }
});
</script>
@endif
@endsection
