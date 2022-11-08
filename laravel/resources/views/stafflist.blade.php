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
              <h3 class="text-white mb-0">Staff List</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush" id="table_senarai">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">No</th>
                    <th scope="col" class="sort" data-sort="budget">Staff</th>
                    <th scope="col" class="sort" data-sort="budget">Staff ID</th>
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
                            <?php echo $sen->staff_id; ?>
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