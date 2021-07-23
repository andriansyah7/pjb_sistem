
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>Dashboard </p>
            </a>
          </li> 
          
          <!-- Layanan -->
          <li class="nav-header">Layanan</li>
          <li class="nav-item has-treeview {{ Route::currentRouteNamed('data-ecp') ? 'menu-open' : '' }} || {{ Route::currentRouteNamed('data-spv') ? 'menu-open' : '' }} || {{ Route::currentRouteNamed('data-manager') ? 'menu-open' : '' }} 
          || {{ Route::currentRouteNamed('data-meqa') ? 'menu-open' : '' }} || {{ Route::currentRouteNamed('data-notulen') ? 'menu-open' : '' }} || {{ Route::currentRouteNamed('data-tindaklanjut') ? 'menu-open' : '' }} 
          || {{ Route::currentRouteNamed('data-ecp-meqa') ? 'menu-open' : '' }} || {{ Route::currentRouteNamed('data-ecp-approval2') ? 'menu-open' : '' }} || {{ Route::currentRouteNamed('data-disposisi-spvso') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
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
                  <p>History Approval 1 ECP</p>
                </a>
              </li>
          <li class="nav-item">
                <a href="{{route('data-manager')}}" class="nav-link {{ Route::currentRouteNamed('data-manager') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>History Approval 2 ECP</p>
                </a>
              </li>
          <li class="nav-item">
                <a href="{{route('data-meqa')}}" class="nav-link {{ Route::currentRouteNamed('data-meqa') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>History Approval MEQA</p>
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

              @if ((auth()->user()->role_id=="2") && (auth()->user()->fungsi_id=="4"))
              <li class="nav-item">
                <a href="{{route('data-ecp-meqa')}}" class="nav-link {{ Route::currentRouteNamed('data-ecp-meqa') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data ECP MEQA</p>  
                </a>
              </li>
              @endif
              @if (auth()->user()->role_id=="2")
          <li class="nav-item">
                <a href="{{route('data-ecp-approval2')}}" class="nav-link {{ Route::currentRouteNamed('data-ecp-approval2') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data ECP ORIGINATOR </p> 
                </a>
              </li>
          
              <!-- <li class="nav-item">
                <a href="{{route('data-spv')}}" class="nav-link {{ Route::currentRouteNamed('data-spv') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>History Approval 1 ECP</p>
                </a>
              </li>

          <li class="nav-item">
                <a href="{{route('data-manager')}}" class="nav-link {{ Route::currentRouteNamed('data-manager') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>History Approval 2 ECP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('data-meqa')}}" class="nav-link {{ Route::currentRouteNamed('data-meqa') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>History Approval MEQA</p>
                </a>
              </li> -->
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

          @if ((auth()->user()->role_id=="3")  && ((auth()->user()->fungsi_id=="1") || (auth()->user()->fungsi_id=="2")))
        
          <li class="nav-item">
                <a href="{{route('data-disposisi-spvso')}}" class="nav-link {{ Route::currentRouteNamed('data-disposisi-spvso') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Disposisi ECP</p>
                </a>
              </li>
            @endif
          
          @if (auth()->user()->role_id=="3")
          <li class="nav-item">
                <a href="{{route('data-ecp-approval1')}}" class="nav-link {{ Route::currentRouteNamed('data-ecp-approval1') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Approval ECP Originator</p>
                </a>
              </li>
        
          
          <!-- <li class="nav-item">
                <a href="{{route('data-spv')}}" class="nav-link {{ Route::currentRouteNamed('data-spv') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>History Approval 1 ECP</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('data-manager')}}" class="nav-link {{ Route::currentRouteNamed('data-manager') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>History Approval 2 ECP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('data-meqa')}}" class="nav-link {{ Route::currentRouteNamed('data-meqa') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>History Approval MEQA</p>
                </a>
              </li> -->
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

              <!-- <li class="nav-item">
                <a href="{{route('data-spv')}}" class="nav-link {{ Route::currentRouteNamed('data-spv') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>History Approval 1 ECP</p>
                </a>
              </li>
          <li class="nav-item">
                <a href="{{route('data-manager')}}" class="nav-link {{ Route::currentRouteNamed('data-manager') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>History Approval 2 ECP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('data-meqa')}}" class="nav-link {{ Route::currentRouteNamed('data-meqa') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>History Approval MEQA</p>
                </a>
              </li> -->
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

              @if ((auth()->user()->role_id=="5") && ((auth()->user()->fungsi_id=="1") || (auth()->user()->fungsi_id=="2")))
              
              <li class="nav-item">
                <a href="{{route('data-spv_so')}}" class="nav-link {{ Route::currentRouteNamed('data-spv_so') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p> Disposisi ECP</p>
                </a>
              </li>
              @endif

              @if (auth()->user()->role_id=="5") 
          <li class="nav-item">
                <a href="{{route('data-ecp')}}" class="nav-link {{ Route::currentRouteNamed('data-ecp') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p> Data ECP</p>
                </a>
              </li>

          <!-- <li class="nav-item">
                <a href="{{route('data-spv')}}" class="nav-link {{ Route::currentRouteNamed('data-spv') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>History Approval 1 ECP</p>
                </a>
              </li>
          <li class="nav-item">
                <a href="{{route('data-manager')}}" class="nav-link {{ Route::currentRouteNamed('data-manager') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>History Approval 2 ECP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('data-meqa')}}" class="nav-link {{ Route::currentRouteNamed('data-meqa') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>History Approval MEQA</p>
                </a>
              </li> -->

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

          <li class="nav-item has-treeview {{ Route::currentRouteNamed('data-rcfa') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                RCFA
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('data-rcfa')}}" class="nav-link {{ Route::currentRouteNamed('data-rcfa') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data RCFA</p>
                </a>
              </li>
              </ul>
              </li>

          <li class="nav-item has-treeview {{ Route::currentRouteNamed('data-kajian') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                KAJIAN ENGINEERING
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('data-kajian')}}" class="nav-link {{ Route::currentRouteNamed('data-kajian') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Kajian Engineering</p>
                </a>
              </li>
              </ul>
              </li>

          <li class="nav-item has-treeview {{ Route::currentRouteNamed('data-serp_main') ? 'menu-open' : '' }} || {{ Route::currentRouteNamed('data-serp_history') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                SERP
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('data-serp_main')}}" class="nav-link {{ Route::currentRouteNamed('data-serp_main') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Main Equipment</p>
                </a>
              </li>
              </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('data-serp_history')}}" class="nav-link {{ Route::currentRouteNamed('data-serp_history') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data History</p>
                </a>
              </li>
              </ul>
              </li>

              @if ((auth()->user()->role_id=="5") && ((auth()->user()->fungsi_id=="1") || (auth()->user()->fungsi_id=="2")))

          <li class="nav-item has-treeview {{ Route::currentRouteNamed('create-notulen-ecp') ? 'menu-open' : '' }} || {{ Route::currentRouteNamed('create-notulen-rcfa') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
               NOTULEN
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('create-notulen-ecp')}}" class="nav-link {{ Route::currentRouteNamed('create-notulen-ecp') ? 'active' : '' }}">
                  <i class="fas fa-plus-circle"></i>
                  <p>Notulen ECP</p>
                </a>
              </li>
              </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('create-notulen-rcfa')}}" class="nav-link {{ Route::currentRouteNamed('create-notulen-rcfa') ? 'active' : '' }}">
                  <i class="fas fa-plus-circle"></i>
                  <p>Notulen RCFA</p>
                </a>
              </li>
              </ul>
              </li>
          @endif



<!-- pengaturan -->
          
          
      
        

          @if (auth()->user()->role_id=="4")
          <li class="nav-header">Pengaturan</li>
          
          <li class="nav-item has-treeview {{ Route::currentRouteNamed('data-serp_system') ? 'menu-open' : '' }} || {{ Route::currentRouteNamed('data-serp_pic') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                SERP
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
          <li class="nav-item">
                <a href="{{route('data-serp_system')}}" class="nav-link {{ Route::currentRouteNamed('data-serp_system') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data System</p>
                </a>
              </li>

          <li class="nav-item">
                <a href="{{route('data-serp_pic')}}" class="nav-link {{ Route::currentRouteNamed('data-serp_pic') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data PIC</p>
                </a>
              </li>

              </ul>
          </li>
              @endif

           

          @if (auth()->user()->role_id=="1")
          <li class="nav-header">Pengaturan</li>

          <li class="nav-item has-treeview {{ Route::currentRouteNamed('data-blok') ? 'menu-open' : '' }} || {{ Route::currentRouteNamed('data-serp_unit') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                SERP
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
          <li class="nav-item">
                <a href="{{route('data-blok')}}" class="nav-link {{ Route::currentRouteNamed('data-blok') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Blok</p>
                </a>
              </li>

          <li class="nav-item">
                <a href="{{route('data-serp_unit')}}" class="nav-link {{ Route::currentRouteNamed('data-serp_unit') ? 'active' : '' }}">
                  <i class="far fa-file"></i>
                  <p>Data Unit</p>
                </a>
              </li>
              </ul>
              </li>

          <li class="nav-item has-treeview {{ Route::currentRouteNamed('data-user') ? 'menu-open' : '' }} || {{ Route::currentRouteNamed('data-jabatan') ? 'menu-open' : '' }} || {{ Route::currentRouteNamed('data-unit') ? 'menu-open' : '' }} || {{ Route::currentRouteNamed('data-fungsi') ? 'menu-open' : '' }} ">
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
            </ul>
            </li>
              @endif
         
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->