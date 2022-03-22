<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #1e3135;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('assets/dist/img/logo_navbar.jpg') }}" alt="AdminLTE Logo" class="brand-image" style="opacity: .8;">
      <span class="brand-text font-weight-light">KULIAH ID</span>
    </a>

    <!-- Sidebar  Start-->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
         <li class="nav-item menu-open">

           <li class="nav-header">MENU USER</li>
           <li class="nav-item">
             <a href="" class="nav-link">
               <i class="nav-icon fas fa-user"></i>
               <p>
               Profil Saya
               </p>
             </a>
           </li>

          <li class="nav-header">MENU KELAS</li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                Kelas Saya
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
                <p>
                 Pesanan Saya
                </p>
              </a>
            </li>
         </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>