<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" data-layout="stroke-svg">
  <div class="logo-wrapper"><a href="/"><img class="img-fluid" style="width: 150px;" src="{{asset('admin/images/logo/logo.png')}}" alt=""></a>
    <div class="back-btn"><i class="fa fa-angle-left"> </i></div>
    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
  </div>
  <div class="logo-icon-wrapper"><a href="/"><img class="img-fluid" style="height:40px;" src="{{asset('admin/images/logo/logo-icon.png')}}" alt=""></a></div>
  <nav class="sidebar-main">
    <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
    <div id="sidebar-menu">
      <ul class="sidebar-links" id="simple-bar">
        <li class="back-btn"><a href="/"><img class="img-fluid" src="{{asset('admin/images/logo/logo-icon.png')}}" alt=""></a>
          <div class="mobile-back text-end"> <span>Back </span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
        </li>
        <li class="pin-title sidebar-main-title">
          <div> 
            <h6>Pinned</h6>
          </div>
        </li>
        <li class="sidebar-main-title">
          <div>
            <h6 class="lan-1">General</h6>
          </div>
        </li>
        <li class="sidebar-list">
          <a class="sidebar-link sidebar-title link-nav" href="/portal">
            <svg class="stroke-icon">
              <use href="{{asset('admin/svg/icon-sprite.svg#stroke-home')}}"></use>
            </svg>
            <svg class="fill-icon">
              <use href="{{asset('admin/svg/icon-sprite.svg#fill-home')}}"></use>
            </svg>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="sidebar-list">
          <a class="sidebar-link sidebar-title link-nav" href="/portal/services">
            <svg class="stroke-icon"> 
              <use href="{{asset('admin/svg/icon-sprite.svg#stroke-widget')}}"></use>
            </svg>
            <svg class="fill-icon">
              <use href="{{asset('admin/svg/icon-sprite.svg#fill-widget')}}"></use>
            </svg>
            <span>Services</span>
          </a>
        </li>
        <li class="sidebar-list">
          <a class="sidebar-link sidebar-title link-nav" href="/portal/success-stories">
            <svg class="stroke-icon"> 
              <use href="{{asset('admin/svg/icon-sprite.svg#stroke-form')}}"></use>
            </svg>
            <svg class="fill-icon">
              <use href="{{asset('admin/svg/icon-sprite.svg#fill-widget')}}"></use>
            </svg>
            <span>Success Stories</span>
          </a>
        </li>
        <li class="sidebar-list">
          <a class="sidebar-link sidebar-title link-nav" href="/portal/testimonials">
            <svg class="stroke-icon"> 
              <use href="{{asset('admin/svg/icon-sprite.svg#stroke-calendar')}}"></use>
            </svg>
            <svg class="fill-icon">
              <use href="{{asset('admin/svg/icon-sprite.svg#fill-widget')}}"></use>
            </svg>
            <span>Testimonials</span>
          </a>
        </li>
        <li class="sidebar-list">
          <a class="sidebar-link sidebar-title link-nav" href="/portal/teams">
            <svg class="stroke-icon"> 
              <use href="{{asset('admin/svg/icon-sprite.svg#stroke-user')}}"></use>
            </svg>
            <svg class="fill-icon">
              <use href="{{asset('admin/svg/icon-sprite.svg#fill-user')}}"></use>
            </svg>
            <span>Teams</span>
          </a>
        </li>
        <li class="sidebar-list">
          <a class="sidebar-link sidebar-title link-nav" href="/portal/contact-queries">
            <svg class="stroke-icon"> 
              <use href="{{asset('admin/svg/icon-sprite.svg#stroke-user')}}"></use>
            </svg>
            <svg class="fill-icon">
              <use href="{{asset('admin/svg/icon-sprite.svg#fill-user')}}"></use>
            </svg>
            <span>User Queries</span>
          </a>
        </li>
        <li class="sidebar-list">
            <a class="sidebar-link sidebar-title active" href="#">
              <svg class="stroke-icon">
                <use href="{{asset('admin/svg/icon-sprite.svg#stroke-knowledgebase')}}"></use>
              </svg>
              <svg class="fill-icon">
                <use href="{{asset('admin/svg/icon-sprite.svg#stroke-user')}}"></use>
              </svg>
              <span>Website Settings</span>
              <div class="according-menu">
                <i class="fa fa-angle-down"></i>
              </div>
            </a>
            <ul class="sidebar-submenu" style=""> 
              <li><a href="/portal/about-us">About Info</a></li>
              <li><a href="/portal/contact-info">Contact Info</a></li>
            </ul>
        </li>
      </ul>
      <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </div>
  </nav>
</div>
<!-- Page Sidebar Ends-->