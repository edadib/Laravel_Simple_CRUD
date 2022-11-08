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
                                            <td class="td-actions text-center">
                                                <a rel="tooltip" class="edit btn btn-success" href="{{ route('activity.edit', ['id' => $a->id])}}">
                                                    Edit
                                                </a>
                                                <a type="button" class="delete btn btn-danger" onclick="return confirm('Are you sure you want to remove this activity?')" href="{{ route('activity.delete', [ 'id' => $a->id ]) }}">
                                                    Delete
                                                </a>
                                                {{-- <form method="POST" action="{{ route('activity.delete', $a->id) }}">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button type="submit" class="btn btn-danger btn-sm delete-confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                                                </form> --}}
                                                {{-- <form method="POST" action="{{ route('activity.delete', $a->id) }}">
                                                    @csrf
                                                    @method('post')
                                                    <a class="btn btn-warning delete-confirm">Delete</a>
                                                </form>  --}}
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
        @include('layouts.footers.auth')
@endsection

@push('js')

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if ($message = Session::get('success'))
    <script>
       Swal.fire({
        text: "{{ $message }}",
        icon: "success",
        confirmButtonText: "Okay",
        customClass: {
            confirmButton: "btn btn-success",
        }
    });
    </script>
@endif
<script>

$('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure to delete this activity?',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });

});
</script>

@endpush
