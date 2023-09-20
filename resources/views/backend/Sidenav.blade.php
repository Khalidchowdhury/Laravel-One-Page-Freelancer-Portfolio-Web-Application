<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">




            {{-- Menu Item --}}

            <li class="nav-item menu-open">
              <a href="{{ route('admin.page') }}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>

            <li class="nav-item menu-open">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-plus-square"></i>
                <p>Navbar</p>
              </a>
            </li>

            <li class="nav-item menu-open">
              <a href="{{ route('home.section') }}" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>Home</p>
              </a>
            </li>

            <li class="nav-item menu-open">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>Portfolio</p>
              </a>
            </li>

            <li class="nav-item menu-open">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>About</p>
              </a>
            </li>

            <li class="nav-item menu-open">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-phone-alt"></i>
                <p>Contact</p>
              </a>
            </li>





          </ul>
      </nav>
    </div>
  </aside>
