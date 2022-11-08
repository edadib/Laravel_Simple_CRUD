<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/l.png" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profile.edit') }}">
                    <i class="ni ni-tv-2 text-primary"></i> {{ __('User profile') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('staff.index') }}">
                    <i class="ni ni-tv-2 text-primary"></i> {{ __('User Management') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('ngo.index') }}">
                    <i class="ni ni-tv-2 text-primary"></i> {{ __('NGO Management') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('ngo.index') }}">
                    <i class="ni ni-tv-2 text-primary"></i> {{ __('Announcement') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('ngo.index') }}">
                    <i class="ni ni-tv-2 text-primary"></i> {{ __('Activities') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('ngo.index') }}">
                    <i class="ni ni-tv-2 text-primary"></i> {{ __('Staff List') }}
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
