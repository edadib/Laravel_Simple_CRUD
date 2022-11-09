@extends('layouts.app')

@section('content')
@include('users.partials.header', [
    'title' => 'Virtue Queue (VQ) Reservations'
    ])
<style>
   

</style>

    
    <div class="container-fluid mt--7">

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
                                            <a rel="tooltip" class="edit btn btn-success" href="#">
                                                Reserve Now
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
<script>

</script>
@endpush