<nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
  <div class="container-fluid navbar-inner">
    <a href="{{route('dashboard')}}" class="navbar-brand">
      <svg width="30" class="text-primary" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
        <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
        <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
        <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
      </svg>
      <h4 class="logo-title">{{env('APP_NAME')}}</h4>
    </a>
    <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
      <i class="icon">
        <svg width="20px" height="20px" viewBox="0 0 24 24">
          <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
      </svg>
      </i>
    </div>
    <div class="input-group search-input">
      <span class="input-group-text" id="search-input">
        <svg width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
          <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
      </span>
      <input type="search" class="form-control" placeholder="Search...">
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      <span class="navbar-toggler-icon">
        <span class="navbar-toggler-bar bar1 mt-2"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto  navbar-list mb-2 mb-lg-0">
      <li class="nav-item me-3">
        
        </li>
       
       
        <li class="nav-item dropdown">
          <a href="#" class="nav-link" id="mail-drop" data-bs-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
            <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path opacity="0.4" d="M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z" fill="currentColor"></path>
              <path d="M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z" fill="currentColor"></path>
            </svg>
            <span class="bg-primary count-mail"></span>
          </a>
          <div class="sub-drop dropdown-menu dropdown-menu-end p-0" aria-labelledby="mail-drop">
            <div class="card shadow-none m-0">
              <div class="card-header d-flex justify-content-between bg-primary py-3">
                <div class="header-title">
                  <h5 class="mb-0 text-white">All Message</h5>
                </div>
              </div>
              <div class="card-body p-0 ">
                <a href="#" class="iq-sub-card">
                  <div class="d-flex  align-items-center">
                    <div class="">
                      <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="{{asset('images/shapes/01.png')}}" alt="">
                    </div>
                    <div class=" w-100 ms-3">
                      <h6 class="mb-0 ">Bni Emma Watson</h6>
                      <small class="float-left font-size-12">13 Jun</small>
                    </div>
                  </div>
                </a>
                <a href="#" class="iq-sub-card">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="{{asset('images/shapes/02.png')}}" alt="">
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                      <small class="float-left font-size-12">20 Apr</small>
                    </div>
                  </div>
                </a>
                <a href="#" class="iq-sub-card">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="{{asset('images/shapes/03.png')}}" alt="">
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0 ">Why do we use it?</h6>
                      <small class="float-left font-size-12">30 Jun</small>
                    </div>
                  </div>
                </a>
                <a href="#" class="iq-sub-card">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="{{asset('images/shapes/04.png')}}" alt="">
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0 ">Variations Passages</h6>
                      <small class="float-left font-size-12">12 Sep</small>
                    </div>
                  </div>
                </a>
                <a href="#" class="iq-sub-card">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <img class="avatar-40 rounded-pill bg-soft-primary p-1" src="{{asset('images/shapes/05.png')}}" alt="">
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                      <small class="float-left font-size-12">5 Dec</small>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link py-0 d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="{{asset('images/avatars/01.png')}}" alt="User-Profile" class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">
          <img src="{{asset('images/avatars/avtar_1.png')}}" alt="User-Profile" class="theme-color-purple-img img-fluid avatar avatar-50 avatar-rounded">
          <img src="{{asset('images/avatars/avtar_2.png')}}" alt="User-Profile" class="theme-color-blue-img img-fluid avatar avatar-50 avatar-rounded">
          <img src="{{asset('images/avatars/avtar_4.png')}}" alt="User-Profile" class="theme-color-green-img img-fluid avatar avatar-50 avatar-rounded">
          <img src="{{asset('images/avatars/avtar_5.png')}}" alt="User-Profile" class="theme-color-yellow-img img-fluid avatar avatar-50 avatar-rounded">
          <img src="{{asset('images/avatars/avtar_3.png')}}" alt="User-Profile" class="theme-color-pink-img img-fluid avatar avatar-50 avatar-rounded">
            <div class="caption ms-3 d-none d-md-block ">
              <h6 class="mb-0 caption-title">{{ auth()->user()->full_name ?? 'Austin Robertson'  }}</h6>
              <p class="mb-0 caption-sub-title text-capitalize">{{ str_replace('_',' ',auth()->user()->user_type) ?? 'Marketing Administrator' }}</p>
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('users.show', auth()->id() || 1)}}">Profile</a></li>
            <li><a class="dropdown-item" href="{{route('auth.userprivacysetting')}}">Privacy Setting</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><form method="POST" action="{{route('logout')}}">
              @csrf
              <a href="javascript:void(0)" class="dropdown-item"
                onclick="event.preventDefault();
              this.closest('form').submit();">
                  {{ __('Log out') }}
              </a>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


