<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light" id="sidenav-main" style="background-color: #172b4d!important;">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/delllogo.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            @if(auth()->user()->roleID == 1)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}" style="color: #fff;">
                    <span class="iconify" data-icon="line-md:home-md-twotone" style="color: white;" data-width="25" data-height="25"></span>
                    &emsp;{{ __('Home') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('faq') }}" style="color: #fff;">
                    <span class="iconify" data-icon="line-md:clipboard-check-twotone" style="color: white;" data-width="25" data-height="25"></span>
                    &emsp;{{ __('FAQ Section') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('floor') }}" style="color: #fff;">
                    <span class="iconify" data-icon="line-md:twitter-twotone" style="color: white;" data-width="25" data-height="25"></span>
                    &emsp;{{ __('Map/Floor Plan') }}
                </a>
            </li>
            @endif
            @if(auth()->user()->roleID == 2)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}" style="color: #fff;">
                        <span class="iconify" data-icon="line-md:computer-twotone" style="color: white;" data-width="25" data-height="25"></span> 
                        &emsp;{{ __('Dashboard') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('staff.user') }}" style="color: #fff;">
                        <span class="iconify" data-icon="line-md:text-box-twotone-to-text-box-multiple-twotone-transition" style="color: white;" data-width="25" data-height="25"></span>
                        &emsp;{{ __('User Management') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ngo.index') }}" style="color: #fff;">
                        <span class="iconify" data-icon="line-md:home-md-twotone" style="color: white;" data-width="25" data-height="25"></span>
                        &emsp;{{ __('NGO Management') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('announ.index') }}" style="color: #fff;">
                        <span class="iconify" data-icon="line-md:telegram" style="color: white;" data-width="25" data-height="25"></span>
                        &emsp;{{ __('Announcement') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('activity.index') }}" style="color: #fff;">
                        <span class="iconify" data-icon="line-md:calendar" style="color: white;" data-width="25" data-height="25"></span>
                        &emsp;{{ __('Activities') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('staff.index') }}" style="color: #fff;">
                        <span class="iconify" data-icon="line-md:document-list-twotone" style="color: white;" data-width="25" data-height="25"></span>
                        &emsp;{{ __('Staff List') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('application.index') }}" style="color: #fff;">
                        <span class="iconify" data-icon="line-md:list-3-twotone" style="color: white;" data-width="25" data-height="25"></span>
                        &emsp;{{ __('Application List') }}
                    </a>
                </li>
            @endif
        </ul>
        </div>
      </div>
    </div>
</nav>