@extends('layouts.app', ['title' => __('User Profile')])
@section('content')
@include('users.partials.header', [
        'title' => 'Users'
        ])

<div class="container-fluid mt--7">
  <div class="text-end mb-3 me-3">
    <a href="#" onclick="add_user()" class="btn btn-success waves-effect waves-light">
      <i class="fas fa-plus me-2"></i>
      Add New User
    </a>
  </div>

  <div class="row">
    <div class="col-12 order-xl-1">
      <div class="card bg-default shadow">
        <div class="card-body">
          <div class="table-responsive py-4">
            <table class="table table-bordered table-dark" id="user-datatable">
              <thead>
                <tr>
                  <th scope="col" class="sort" data-sort="name">No</th>
                  <th scope="col" class="sort" data-sort="budget">User</th>
                  <th scope="col" class="sort" data-sort="budget">Email</th>
                  <th scope="col" class="sort" data-sort="budget">Role</th>
                  <th scope="col" class="sort text-center" data-sort="budget">Action</th>
                </tr>
              </thead>
              <tbody class="list">
                @if($senarai)
                  <?php $count = 1; ?>
                  @foreach ($senarai as $sen)
                    <tr>
                      <td class="budget">
                      <?php echo $count; ?>
                      </td>
                      <td class="budget">
                      <?php echo $sen->name; ?>
                      </td>
                      <td class="budget">
                      <?php echo $sen->email; ?>
                      </td>
                      <td class="budget">
                      <?php echo $sen->role; ?>
                      </td>
                      <td class="text-center">
                        <form method="post" action="{{ route('staff.delete_user')}}" autocomplete="off">
                          @csrf
                          @method('post')
                          <input type="hidden" name="id" id="id" value="<?php echo $sen->userID; ?>">
                          <!-- <button class="btn btn-success" >{{ __('Edit User') }}</button> -->
                          <button class="btn btn-danger" type="submit">{{ __('Delete') }}</button>
                        </form>
                      </td>
                    </tr>
                    <?php $count +=1; ?>
                  @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('layouts.footers.auth')
</div>
@endsection

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
  function add_user()
  {
    window.location.href = "{{ route('staff.add_user')}}";
  }
</script>