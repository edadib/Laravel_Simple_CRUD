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
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}" style="color: #fff;">
                    <span class="iconify" data-icon="line-md:computer-twotone" style="color: white;" data-width="25" data-height="25"></span> 
                    &emsp;{{ __('Dashboard') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profile.edit') }}" style="color: #fff;">
                    <span class="iconify" data-icon="line-md:account" style="color: white;" data-width="25" data-height="25"></span>
                    &emsp;{{ __('User profile') }}
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
                <a class="nav-link" href="{{ route('ngo.index') }}" style="color: #fff;">
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
            {{-- <li class="nav-item">
                <a class="nav-link active" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                    <i class="fab fa-laravel" style="color: #f4645f;"></i>
                    <span class="nav-link-text" style="color: #f4645f;">{{ __('Admin Menu') }}</span>
                </a>

                <div class="collapse show" id="navbar-examples">
                    <ul class="nav nav-sm flex-column">
                    </ul>
                </div>
            </li> --}}
        </ul>

        </div>
      </div>
    </div>
</nav>
