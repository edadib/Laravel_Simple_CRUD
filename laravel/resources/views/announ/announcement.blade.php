  @extends('layouts.app', ['title' => __('User Profile')])
  @section('content')
      @include('users.partials.header', [
          'title' => false,
          'description' => false,
          'class' => 'col-lg-7'
      ])
      <div class="container-fluid mt--12">
        <!-- Dark table -->
        <div class="text-end mb-3 me-3">
                  <a href="announ/create_announ" class="btn btn-success waves-effect waves-light">
                      <i class="fas fa-plus me-2"></i>
                      Add New Anouncement</a>
                </div>
                
        <div class="row">
          <div class="col">
            <div class="card bg-default shadow">
              <div class="card-header bg-transparent border-0">
                <h3 class="text-white mb-0">Announcement table</h3>
              </div>
              
              <div class="table-responsive">
                <table class="table align-items-center table-dark table-flush" id="table_senarai">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col" class="sort" data-sort="name">No</th>
                      <th scope="col" class="sort" data-sort="budget">Announcement</th>
                      <th scope="col" class="sort" data-sort="budget">Date Created</th>
                      <th scope="col" class="sort" data-sort="budget">Date Udated</th>
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
                              <?php echo $sen->announce_text; ?>
                              </td>
                              <td class="budget">
                              <?php echo $sen->created_at; ?>
                              </td>
                              <td class="budget">
                              <?php echo $sen->updated_at; ?>
                              </td>
                              <td class="budget">
                                
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