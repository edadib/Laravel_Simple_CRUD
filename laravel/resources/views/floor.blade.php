@extends('layouts.app')

@section('content')
@include('users.partials.header', [
    'title' => 'Map/Floor Plan'
    ])
<style>
   

</style>

    
    <div class="container-fluid mt--7">
        <div class="row" style="padding: 10px 0;">
            <div class="col-12 order-xl-1">
                <div class="card bg-default shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 order-xl-1 text-center">
                                <h2 style="color: white">Floor Plan</h2>
                                <div class="row justify-content-center" style="padding-bottom: 5%;">
                                    <img src="{{ asset('argon') }}/img/theme/t-in-the-park.jpg" href="#" style="width:50%">
                                </div>
                                
                                <h2 style="color: white">Map</h2>
                                <div class="row"  style="padding-left: 20%; padding-right:20%; padding-top: 0; padding-bottom: 5%;">
                                    <div class="col-sm-6" style="padding: 3%;">
                                        <a target="blank" href="https://goo.gl/maps/gUeVQEiHLLXmoVNT8"><img src="{{ asset('argon') }}/img/theme/google.png" style="width:100%"></a>
                                    </div>
                                    <div class="col-sm-6" style="padding: 3%;">
                                        <a target="blank" href="https://www.waze.com/en/live-map/directions/my/selangor/cyberjaya/dell-global-business-center-sdn.-bhd.?place=ChIJ8X1SwAa3zTERh93Z3ttVCEY">
                                            <img src="{{ asset('argon') }}/img/theme/waze.png" href="#" style="width:100%"></a>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.67261883103!2d101.6550033147202!3d2.910248355386466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdb706c0527df1%3A0x460855dbded9dd87!2sDell%20Global%20Business%20Center%20Sdn.%20Bhd.!5e0!3m2!1sen!2smy!4v1667935697062!5m2!1sen!2smy" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth')

@endsection


@push('js')
<script>

</script>
@endpush