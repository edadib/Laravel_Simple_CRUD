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
              <h3 class="text-white mb-0">User table</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush" id="table_senarai">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">No</th>
                    <th scope="col" class="sort" data-sort="budget">Staff</th>
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
                            <td class="text-center">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#">View</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
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