@extends('layouts.app', ['title' => __('User Profile')])
@section('content')
@include('users.partials.header', [
        'title' => 'Application List'
        ])

<div class="container-fluid mt--7">
  <div class="row">
    <div class="col-12 order-xl-1">
      <div class="card bg-default shadow">
        <div class="card-body">
          <div class="table-responsive py-4">
            <table class="table table-bordered table-dark" id="ngo-datatable">
              <thead>
                <tr>
                  <th scope="col" class="sort" data-sort="name">No</th>
                  <th scope="col" class="sort" data-sort="budget">Application ID</th>
                  <th scope="col" class="sort" data-sort="budget">Applicant</th>
                  <th scope="col" class="sort" data-sort="budget">Staff ID</th>
                  <th scope="col" class="sort" data-sort="budget">Staff </th>
                  <th scope="col" class="sort" data-sort="budget">Shirt Size </th>
                  <th scope="col" class="sort" data-sort="budget">NGO </th>
                  <th scope="col" class="sort" data-sort="budget">Relationship </th>
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
                      <?php echo $sen->appID; ?>
                      </td>
                      <td class="budget">
                      <?php echo $sen->applicant; ?>
                      </td>
                      <td class="budget">
                      <?php echo $sen->staff_id; ?>
                      </td>
                      <td class="budget">
                      <?php echo $sen->staff_name; ?>
                      </td>
                      <td class="budget">
                      <?php echo $sen->size; ?>
                      </td>
                      <td class="budget">
                      <?php echo $sen->ngo_name; ?>
                      </td>
                      <td class="budget">
                      <?php echo $sen->relation; ?>
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