    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('home')}}" class="brand-link">
          <img src="{{asset('backend')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: 0.8" />
          <span class="brand-text font-weight-light">Dashboard</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{(!empty(Auth::user()->image)?url('upload/user_images/'. Auth::user()->image):url('upload/user_images/admin.png'))}}" class="img-circle elevation-2" alt="User Image" />
            </div>
            <div class="info">
              <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
          </div>

          @php
              $prefix = Request::route()->getPrefix();
              $route = Route::current()->getName();
          @endphp

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
              @if (Auth::user()->userType == 'Admin')
                 <li class="nav-item has-treeview {{ ($prefix=='/users')?'menu-open':'' }}">
                <a href="#" class="nav-link">
                    <i class="fa fa-user fa-fw mr-1"></i>
                  <p>

                    Users Management
                    <i class="fas fa-angle-left right"></i>

                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('users.view')}}" class="nav-link {{ ($route == 'users.view')?'active':'' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View Users</p>
                    </a>
                  </li>




                </ul>
              </li>
              @endif


              <li class="nav-item has-treeview {{ ($prefix=='/profiles')?'menu-open':'' }}">
                <a href="#" class="nav-link ">
                    <i class="fa fa-user fa-fw mr-1"></i>
                  <p>

                    Profile Management
                    <i class="fas fa-angle-left right"></i>

                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('profiles.view')}}" class="nav-link {{ ($route == 'profiles.view')?'active':'' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>My Profile</p>
                    </a>
                  </li>
                </ul>

                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('profiles.password.view')}}" class="nav-link {{ ($route == 'profiles.password.view')?'active':'' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Change Password</p>
                    </a>
                  </li>
                </ul>
              </li>


              <li class="nav-item has-treeview {{ ($prefix=='/setups')?'menu-open':'' }}">
                <a href="#" class="nav-link ">
                    <i class="fa fa-user fa-fw mr-1"></i>
                  <p>

                    Setup Management
                    <i class="fas fa-angle-left right"></i>

                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('setups.student.class.view')}}" class="nav-link {{ ($route == 'setups.student.class.view')?'active':'' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Student Class</p>
                    </a>
                  </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{route('setups.student.year.view')}}" class="nav-link {{ ($route == 'setups.student.year.view')?'active':'' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Session Year</p>
                      </a>
                    </li>
                  </ul>

                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{route('setups.student.group.view')}}" class="nav-link {{ ($route == 'setups.student.group.view')?'active':'' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Group</p>
                      </a>
                    </li>
                  </ul>

                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{route('setups.student.shift.view')}}" class="nav-link {{ ($route == 'setups.student.shift.view')?'active':'' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Shift</p>
                      </a>
                    </li>
                  </ul>

                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{route('setups.fee.category.view')}}" class="nav-link {{ ($route == 'setups.fee.category.view')?'active':'' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fee Category</p>
                      </a>
                    </li>
                  </ul>

              </li>

            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
