@section('sidebar')
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('public/assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->fullname}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header"><h6>Master</h6></li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon far fa-clone"></i>
              <p>
                Setting
              </p>
            </a>
          </li>
          <li class="nav-item @yield('master_wa')">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-folder-open"></i>
              <p>
                WA
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('create-master-wa')}}" class="nav-link @yield('create_master_wa')">
                  <i class="far fa-clone nav-icon"></i>
                  <p>Create WA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('list-master-wa')}}" class="nav-link @yield('list_master_wa')">
                  <i class="far fa-clone nav-icon"></i>
                  <p>List WA</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item @yield('master_user')">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-folder-open"></i>
              <p>
                User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('create-master-user')}}" class="nav-link @yield('create_master_user')">
                  <i class="far fa-clone nav-icon"></i>
                  <p>Create User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('list-master-user')}}" class="nav-link @yield('list_master_user')">
                  <i class="far fa-clone nav-icon"></i>
                  <p>List User</p>
                </a>
              </li>
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-folder-open"></i>
              <p>
                Position
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-clone nav-icon"></i>
                  <p>Create Position</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-clone nav-icon"></i>
                  <p>List Position</p>
                </a>
              </li>
            </ul>
          </li> --}}
          <li class="nav-header"><h6>Master</h6></li>
          <li class="nav-item">
            <a href="{{route('setting-proses')}}" class="nav-link">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Setting
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-folder-open"></i>
              <p>
                WA Number
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('wa-number-list')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>WA Number</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>WA Minning</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
@endsection