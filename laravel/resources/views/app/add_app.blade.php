@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
@include('users.partials.header', [
        'title' => 'Register New Application'
        ]) 

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">Register</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('application.insert_app')}}" autocomplete="off">
                            @csrf
                            @method('post')
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" value="" required autofocus>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="staff_id">Staff ID</label>
                                    <input type="text" name="staff_id" id="staff_id" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Staff ID" value="" required>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="role">Role</label>
                                    <select name="role" id="role" class="form-control" required>
                                    @if($senarai_role)
                                        @foreach($senarai_role as $sr)
                                            <option value="<?php echo $sr->id; ?>"><?php echo $sr->relation; ?></option>
                                        @endforeach
                                    @else
                                        <option value="0">Please Choose</option>
                                    @endif
                                    </select>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="size">Size</label>
                                    <select name="size" id="size" class="form-control" required>
                                    @if($senarai_size)
                                        @foreach($senarai_size as $sr)
                                            <option value="<?php echo $sr->id; ?>"><?php echo $sr->size; ?></option>
                                        @endforeach
                                    @else
                                        <option value="0">Please Choose</option>
                                    @endif
                                    </select>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="ngo">NGO</label>
                                    <select name="ngo" id="ngo" class="form-control" required>
                                    @if($senarai_ngo)
                                        @foreach($senarai_ngo as $sr)
                                            <option value="<?php echo $sr->id; ?>"><?php echo $sr->name; ?></option>
                                        @endforeach
                                    @else
                                        <option value="0">Please Choose</option>
                                    @endif
                                    </select>
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-success mt-4" type="submit">Add NGO</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  function add_ngo()
  {
    let name = $('#ngo_name').val();
    let phone = $('#ngo_phone').val();
    let account = $('#ngo_account').val();

  }
</script>
