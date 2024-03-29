<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8') }}">
      <span class="brand-text font-weight-light">pwl_2</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image') }}">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
          </div>
        </div>
    
        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>
    
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{ url('/dashboard') }}" class="nav-link">
                <i class="fas fa-tachometer-alt"></i>
                <p class="pl-3">Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/profile') }}" class="nav-link">
                <i class="fas fa-user"></i>
                <p class="pl-3">Profile</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/pengalaman-kuliah') }}" class="nav-link">
                <i class="fas fa-history"></i>
                <p class="pl-3">Pengalaman Kuliah</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/kendaraan') }}" class="nav-link">
                <i class="fas fa-car"></i>
                <p class="pl-3">Kendaraan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/hobi') }}" class="nav-link">
                <i class="fas fa-swimmer"></i>
                <p class="pl-3">Hobi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/keluarga') }}" class="nav-link">
                <i class="fas fa-users"></i>
                <p class="pl-3">Keluarga</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/mata-kuliah') }}" class="nav-link">
                <i class="fas fa-calendar-day"></i>
                <p class="pl-3">Mata Kuliah</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/mahasiswa') }}" class="nav-link">
                <i class="fas fa-users"></i>
                <p class="pl-3">Mahasiswa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/articles') }}" class="nav-link">
                <i class="fas fa-users"></i>
                <p class="pl-3">Artikel</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    <!-- /.sidebar -->
  </aside>