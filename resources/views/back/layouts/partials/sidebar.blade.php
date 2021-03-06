 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.home')}}" class="brand-link">
      
      <span class="brand-text font-weight-light ml-5">Admin / Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">sfas </a>
        </div>
      </div>

  
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="fas fa-home"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.home')}}" class="nav-link">
                  <i class="fas fa-solar-panel text-info"></i>
                  <p>Admin Panel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('front.home')}}" class="nav-link " target="_blank">
                  <i class="fas fa-globe text-info"></i>
                  <p>Moto Website</p>
                </a>
              </li>
            </ul>
          </li>
    
           <li class="nav-item">
            <a href="{{route('admin.user.index')}}" class="nav-link">
              <i class="fas fa-users text-warning"></i>
              <p>
                Users
              </p>
            </a>
          </li>
        
          <li class="nav-item">
            <a href="{{route('admin.setting.index')}}" class="nav-link">
              <i class="fas fa-cogs text-warning"></i>
              <p>
                Settings
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.about.index')}}" class="nav-link">
              <i class="fas fa-address-card text-warning"></i>
              <p>
                About
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.product.index')}}" class="nav-link">
              <i class="fab fa-product-hunt text-warning"></i>
              <p>
                Product
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.slider.index')}}" class="nav-link">
              <i class="fas fa-photo-video text-warning"></i>
              <p>
                Slider
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.logout')}}" class="nav-link">
              <i class="fas fa-sign-out-alt text-danger"></i>
              <p>
                Exit
              </p>
            </a>
          </li>


          
          
      
    
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>