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
              <h3 class="text-white mb-0">NGO List</h3>
              <div class="text-right">
                  <button class="btn btn-success mt-4" onclick="add_ngo()">{{ __('Add NGO') }}</button>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush" id="table_senarai">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">No</th>
                    <th scope="col" class="sort" data-sort="budget">NGO</th>
                    <th scope="col" class="sort" data-sort="budget">Phone Number</th>
                    <th scope="col" class="sort" data-sort="budget">Account Number</th>
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
                            <?php echo $sen->phone; ?>
                            </td>
                            <td class="budget">
                            <?php echo $sen->account; ?>
                            </td>
                            <td class="text-center">
                              <button class="btn btn-success mt-4" >{{ __('Edit NGO') }}</button>
                              <button class="btn btn-success mt-4" >{{ __('Delete NGO') }}</button>
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
  function add_ngo()
  {
    window.location.href = "{{ route('ngo.add_ngo')}}";
  }

  function ngodelete(id)
  {
    // alert(id);
    $.ajax({
        url:"{{ route('ngo.delete')}}",
        method:"POST",
        data:{ 
            id: id, 
        },
        success:function(result)
        {
            console.log(result);
        }
    });
  }

</script>