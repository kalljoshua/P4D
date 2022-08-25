
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('dashboard') }}" class="d-block">P4D Admin</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-flag"></i>
              <p>
                Countries
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('countries') }}" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p>All Countries</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('add-country') }}" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Add Countries</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-piggy-bank"></i>
              <p>
                Districts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('districts') }}" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p>All Districts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('add-district') }}" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Add Districts</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-piggy-bank"></i>
              <p>
                Sectors
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('sectors') }}" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p>All Sectors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('add-sector') }}" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Add Sectors</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-check"></i>
              <p>
                Files
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('budgets') }}" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Budget Files</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('plans') }}" class="nav-link">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Plan Files</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('create-file') }}" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Add Files</p>
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