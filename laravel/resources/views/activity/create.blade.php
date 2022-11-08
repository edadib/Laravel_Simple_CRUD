@extends('layouts.app')

@section('content')
@include('users.partials.header', [
        'title' => 'Add New Activity'
        ])

        
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-12 order-xl-1">

                <div class="card bg-default shadow">
                    <div class="card-body">
                    
                        <form method="post" action="{{ route('activity.store')}}" enctype="multipart/form-data" autocomplete="off">
                            @csrf

                            {{-- <h6 class="heading-small text-muted mb-4">{{ __('Info') }}</h6> --}}
                            
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            <div class="pl-lg-4">


                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label" style="color: white">Activity Name <code>*</code></label>
                                    <div class="col">
                                        <input type="text" name="name" id="name" class="form-control form-control-alternative{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="{{ __('Activity Name') }}" value="{{ old('title') }}" autofocus>
                                        @if ($errors->has('name'))
                                            <small id="error" class="form-text text-danger">{{ $errors->first('name') }}</small>
                                        @endif
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label" style="color: white">Details of the activity <code>*</code></label>
                                    <div class="col">
                                        <textarea type="text" name="details" id="details" rows="4"  class="form-control form-control-alternative{{ $errors->has('body') ? ' is-invalid' : '' }}" placeholder="{{ __('Description') }}" autofocus>{{ old('body') }}</textarea>
                                        @if ($errors->has('details'))
                                            <small id="error" class="form-text text-danger">{{ $errors->first('details') }}</small>
                                        @endif
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                    <a  href="{{ route('activity.index') }}" class="btn btn-secondary mt-4">{{ __('Back') }}</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth')

@endsection