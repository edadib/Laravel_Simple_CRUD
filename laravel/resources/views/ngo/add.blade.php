@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
@include('users.partials.header', [
        'title' => 'Add New NGO'
        ]) 

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">Add NGO</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('ngo.insert_ngo')}}" autocomplete="off">
                            @csrf
                            @method('post')
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="ngo_name">NGO Name</label>
                                    <input type="text" name="name" id="ngo_name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="NGO Name" value="" required autofocus>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="ngo_phone">NGO Contact</label>
                                    <input type="text" name="phone" id="ngo_phone" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="NGO Phone Number" value="" required>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="ngo_account">NGO Bank Account</label>
                                    <input type="text" name="account" id="ngo_account" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="NGO Account" value="" required>
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
