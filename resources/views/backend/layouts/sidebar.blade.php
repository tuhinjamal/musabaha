<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{(!empty(Auth::user()->image))?url('upload/user_images/'.Auth::user()->image):url('upload/no_image.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{Auth::user()->name}} </a>
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
          <li class="nav-item menu-open">
           
           
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                User Management
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{route('users.view')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('users.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('profile.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Profile</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('password.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
              
            </ul>
          </li>







          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Logo Management
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{route('logos.view')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Logo</p>
                </a>
              </li>


              <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Slider Management
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{route('slider.view')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Slider</p>
                </a>
              </li>
             

             

              
            </ul>
          </li>


          
          

          
        </ul>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Portfolio Management
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{route('portfolio_a.view')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Portfolio </p>
                </a>
              </li>
            </ul>

        </li>
        <li class="nav-item">
               <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-copy"></i>
                 <p>
                  About Management
                  <i class="fas fa-angle-left right"></i>
                
                  </p>
               </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{route('about.view')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> About </p>
                </a>
              </li>
            </ul>
        </li>
        <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                    <p>
                     Contact Management
                      <i class="fas fa-angle-left right"></i>
                
                    </p>
              </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=" {{route('contact.view')}} " class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Contact </p>
                </a>
              </li>
            </ul>
         </li>
         <li class="nav-item">
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
                <p>
                 Musabaha Management
                  <i class="fas fa-angle-left right"></i>
            
                </p>
          </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href=" {{route('musabaha.view')}} " class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p> Musabaha </p>
            </a>
          </li>
        </ul>
     </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>