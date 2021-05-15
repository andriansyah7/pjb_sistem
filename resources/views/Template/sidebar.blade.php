
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ Route::currentRouteNamed('beranda') ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>Dashboard </p>
            </a>
          </li> 
          <!-- Layanan -->
          <li class="nav-header">Layanan</li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                ECP
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
          @if (auth()->user()->role_id=="1")
          <li class="nav-item">
                <a href="{{route('data-ecp')}}" class="nav-link {{ Route::currentRouteNamed('data-ecp') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data ECP</p>
                </a>
              </li>
          <li class="nav-item">
                <a href="{{route('data-spv')}}" class="nav-link {{ Route::currentRouteNamed('data-spv') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Approval 1 ECP</p>
                </a>
              </li>
          <li class="nav-item">
                <a href="{{route('data-manager')}}" class="nav-link {{ Route::currentRouteNamed('data-manager') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Approval 2 ECP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('data-notulen')}}" class="nav-link {{ Route::currentRouteNamed('data-notulen') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Notulen ECP</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('data-tindaklanjut')}}" class="nav-link {{ Route::currentRouteNamed('data-tindaklanjut') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Tindak Lanjut ECP</p>
                </a>
              </li>
              @endif

              @if (auth()->user()->role_id=="2")
          <li class="nav-item">
                <a href="{{route('data-ecp-approval2')}}" class="nav-link {{ Route::currentRouteNamed('data-ecp-approval2') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data ECP</p>
                </a>
              </li>
          
              <li class="nav-item">
                <a href="{{route('data-spv')}}" class="nav-link {{ Route::currentRouteNamed('data-spv') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Approval 1 ECP</p>
                </a>
              </li>

          <li class="nav-item">
                <a href="{{route('data-manager')}}" class="nav-link {{ Route::currentRouteNamed('data-manager') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Approval 2 ECP</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('data-notulen')}}" class="nav-link {{ Route::currentRouteNamed('data-notulen') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Notulen ECP</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('data-tindaklanjut')}}" class="nav-link {{ Route::currentRouteNamed('data-tindaklanjut') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Tindak Lanjut ECP</p>
                </a>
              </li>
              @endif

          @if (auth()->user()->role_id=="3")
          <li class="nav-item">
                <a href="{{route('data-ecp-approval1')}}" class="nav-link {{ Route::currentRouteNamed('data-ecp-approval1') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data ECP</p>
                </a>
              </li>
          
          <li class="nav-item">
                <a href="{{route('data-spv')}}" class="nav-link {{ Route::currentRouteNamed('data-spv') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Approval 1 ECP</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('data-manager')}}" class="nav-link {{ Route::currentRouteNamed('data-manager') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Approval 2 ECP</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('data-notulen')}}" class="nav-link {{ Route::currentRouteNamed('data-notulen') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Notulen ECP</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('data-tindaklanjut')}}" class="nav-link {{ Route::currentRouteNamed('data-tindaklanjut') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Tindak Lanjut ECP</p>
                </a>
              </li>
              @endif
          
          @if (auth()->user()->role_id=="4")
          <li class="nav-item">
                <a href="{{route('data-ecp')}}" class="nav-link {{ Route::currentRouteNamed('data-ecp') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data ECP</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('data-spv')}}" class="nav-link {{ Route::currentRouteNamed('data-spv') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Approval 1 ECP</p>
                </a>
              </li>
          <li class="nav-item">
                <a href="{{route('data-manager')}}" class="nav-link {{ Route::currentRouteNamed('data-manager') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Approval 2 ECP</p>
                </a>
              </li>
          
          <li class="nav-item">
                <a href="{{route('data-notulen')}}" class="nav-link {{ Route::currentRouteNamed('data-notulen') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Notulen ECP</p>
                </a>
              </li>
        
          <li class="nav-item">
                <a href="{{route('data-tindaklanjut')}}" class="nav-link {{ Route::currentRouteNamed('data-tindaklanjut') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Tindak Lanjut ECP</p>
                </a>
              </li>
              @endif

              @if (auth()->user()->role_id=="5")
          <li class="nav-item">
                <a href="{{route('data-ecp')}}" class="nav-link {{ Route::currentRouteNamed('data-ecp') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data ECP</p>
                </a>
              </li>

          <li class="nav-item">
                <a href="{{route('data-spv')}}" class="nav-link {{ Route::currentRouteNamed('data-spv') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Approval 1 ECP</p>
                </a>
              </li>
          <li class="nav-item">
                <a href="{{route('data-manager')}}" class="nav-link {{ Route::currentRouteNamed('data-manager') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Approval 2 ECP</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('data-notulen')}}" class="nav-link {{ Route::currentRouteNamed('data-notulen') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Notulen ECP</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('data-tindaklanjut')}}" class="nav-link {{ Route::currentRouteNamed('data-tindaklanjut') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Tindak Lanjut ECP</p>
                </a>
              </li>
              @endif

            </ul>
          </li>

<!-- pengaturan -->
          
          @if (auth()->user()->role_id=="1")
          <li class="nav-header">Pengaturan</li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
          <li class="nav-item">
                <a href="{{route('data-user')}}" class="nav-link {{ Route::currentRouteNamed('data-user') ? 'active' : '' }}">
                  <i class="far fa-user"></i>
                  <p>Data User</p>
                </a>
              </li>

          <li class="nav-item">
                <a href="{{route('data-jabatan')}}" class="nav-link {{ Route::currentRouteNamed('data-jabatan') ? 'active' : '' }}">
                  <i class="far fa-user"></i>
                  <p>Data Jabatan</p>
                </a>
              </li>
        
          <li class="nav-item">
                <a href="{{route('data-unit')}}" class="nav-link {{ Route::currentRouteNamed('data-unit') ? 'active' : '' }}">
                  <i class="far fa-user"></i>
                  <p>Data Bidang</p>
                </a>
              </li>
        
          <li class="nav-item">
                <a href="{{route('data-fungsi')}}" class="nav-link {{ Route::currentRouteNamed('data-fungsi') ? 'active' : '' }}">
                  <i class="far fa-user"></i>
                  <p>Data Fungsi</p>
                </a>
              </li>
              @endif
            </ul>
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->