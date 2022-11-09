@extends('layouts.app')

@section('content')
@include('users.partials.header', [
    'title' => false
    ])
<style>
    #news-ticker { 
    font-weight: bold;
    display: block;
    font-family: monospace;
    font-size: 15px;
    padding: 0;
    margin: 0
    }

    #news-ticker .ticker-title {
        display: inline-block;
        margin-right: 12px;
        color: #172b4d;
        font-size: 20px;
    }

    #news-ticker ul { 
        display: inline-block;
        position: relative;
    }

    #news-ticker li a {
        /* color: #007EB9; */
        color: white;
        text-decoration: none;
    }

    #news-ticker li a:hover {
        /* text-decoration: underline; */
        color: rgb(0, 255, 106);
    }

    #news-ticker li {
        position: absolute;
        left: 0;
        width: 0;
        overflow: hidden;
        height: 1.5em;
        word-wrap: break-word;  
        opacity: 0
    }

    #news-ticker li.tick {
        -webkit-animation: tick 7s linear;
        
    }

    @-webkit-keyframes tick {
    0% {
        width: 0;
    }
    5% {
        opacity: 1;
    } 
    90% {
        width: 550px;
        opacity: 1;
    }
    100% {
        opacity: 0
    }
    }

</style>

    
    <div class="container-fluid mt--7">
        <div class="row" style="padding: 10px 0;">
            <div class="col-12 order-xl-1">
                <div class="card bg-gradient-info shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 order-xl-1">
                                <div id="news-ticker">
                                    <div class="ticker-title">Announcement: </div>
                                    <ul>
                                        @foreach ($announcement as $a)
                                        <li>
                                            <a href="">{{$a->announce_text}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="text-end mb-3 me-3">
            <h2 style="color: #172b4d;"><a style="text-decoration:underline" href="{{ route('activity.reserve') }}">Click Here</a> to make Virtue Queue (VQ) Reservations for activities</h2>
            <p style="font-size: 14px">Due to limited spots, some of the activites require prior registration instead of walk in</p>
        </div>
        <div class="row">
            @foreach ($activities as $act)
            <div class="col-6 order-xl-1" style="padding: 15px;">
                <div class="card bg-default shadow">
                    <span class="mask bg-gradient-default opacity-8"></span>
                    <div class="card-body" style="background-image: url(../argon/img/theme/dell-penang.jpg); background-size: cover; background-position: center top;">
                        <div class="row">
                            <div class="col-12 order-xl-1">
                                <p style="color:white; font-weight:600;">{{$act->name}}</p>
                                <p style="color:white; font-size: 13px">{{$act->details}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            
            
        </div>
    </div>
    @include('layouts.footers.auth')

@endsection
@push('js')
<script>
$(function () {
    var $ticker = $('#news-ticker'),
      $first = $('li:first-child', $ticker);
    
    // put an empty space between each letter so we can 
    // use break word
    $('a', $ticker).each(function () {
        var $this = $(this),
          text = $this.text();
       $this.html(text.split('').join('&#8203;'));
    });
    
    // begin the animation
    function tick($el) {
        $el.addClass('tick')
          .on('webkitAnimationEnd oanimationend msAnimationEnd animationend', function () {
              
            $el.removeClass('tick');
              var $next = $el.next('li');
              $next = $next.length > 0 ? $next : $first;
            tick($next);
        });
    }
        
    tick($first);
    
});
</script>
@endpush