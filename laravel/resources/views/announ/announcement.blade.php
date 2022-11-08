@extends('layouts.app')

  @section('content')
  @include('users.partials.header', [
    'title' => 'Announcement'
    ])
      <div class="container-fluid mt--7">
          <div class="text-end mb-3 me-3">
              <a href="{{ route('announ.create') }}" class="btn btn-success waves-effect waves-light">
                  <i class="fas fa-plus me-2"></i>
                  Add New Announcement</a>
          </div>

        <div class="row">
          <div class="col-12 order-xl-1">
              <div class="card bg-default shadow">
                  <div class="card-body">
                      <div class="table-responsive py-4">
                          <table class="table table-bordered table-dark" id="table_senarai">
                              <thead>
                                <tr>      
                                  <th>No</th>
                                  <th>Announcement</th>
                                  <th>Date Created</th>
                                  {{-- <th>Date Updated</th> --}}
                                  <th>Action</th>
                                {{-- </tr> --}}
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
                                          <?php 
                                              $create = new DateTime($sen->created_at);  
                                          ?>
                                          <td class="budget">
                                          <?php echo ($create ->format('d/m/Y')); ?>
                                          </td>
                                          {{-- <?php 
                                              $update = new DateTime($sen->updated_at); 
                                          ?>
                                          <td class="budget">
                                            <?php echo ($update ->format('d/m/Y')); ?>
                                          </td> --}}
                                          <td class="text-center">
                                            <form method="post" action="{{ route('ngo.delete_ngo')}}" autocomplete="off">
                                              @csrf
                                              @method('post')
                                              <input type="hidden" name="id" id="id" value="<?php echo $sen->id; ?>">
                                              <button class="btn btn-success" >{{ __('Edit') }}</button>
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
          </div>
@include('layouts.footers.auth')
@endsection