<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('users/dashboard') }}">
          <i class="icon-grid menu-icon" style="color: #bf9b30"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="{{ url('users/register-citizens') }}">
          <i class="icon-grid menu-icon" style="color: #bf9b30"></i>
          <span class="menu-title">Register Citizens</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="false" aria-controls="auth">
          <i class="ti-settings menu-icon" style="color: #bf9b30"></i>
          <span class="menu-title">Settings</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="settings">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ url('patrons/change-password') }}"> Change Password</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ url('patrons/update-profile') }}"> Edit profile </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Change Card </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Notification </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Suspend Account </a></li>
          </ul>
        </div>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="pages/documentation/documentation.html">
          <i class="icon-paper menu-icon" style="color: #bf9b30"></i>
          <span class="menu-title">Documentation</span>
        </a>
      </li> --}}
    </ul>
  </nav>
