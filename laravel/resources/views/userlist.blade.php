@extends('layouts.app', ['title' => __('User Profile')])
@section('content')
    @include('users.partials.header', [
        'title' => false,
        'description' => false,
        'class' => 'col-lg-7'
    ])
    <div class="container-fluid mt--12">
      <!-- Dark table -->
      <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">User List</h3>
              <div class="text-right">
                  <button class="btn btn-success mt-4" onclick="add_user()">{{ __('Add User') }}</button>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush" id="table_senarai">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">No</th>
                    <th scope="col" class="sort" data-sort="budget">User</th>
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
                            <?php echo $sen->role; ?>
                            </td>
                            <td class="text-center">
                              <form method="post" action="{{ route('staff.delete_user')}}" autocomplete="off">
                                @csrf
                                @method('post')
                                <input type="hidden" name="id" id="id" value="<?php echo $sen->userID; ?>">
                                <button class="btn btn-success" >{{ __('Edit User') }}</button>
                                <button class="btn btn-danger" type="submit">{{ __('Delete User') }}</button>
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