<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="/AdminLTE/index3.html" class="brand-link">
      <img src="/AdminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        {{-- <div class="image"> --}}
          <img src="logo.png" alt="User Image">
        {{-- </div> --}}
        <div class="info">
          <a href="#" class="d-block">PT.UNIRAMA DUTA NIAGA</a>
        </div>
      </div>

      {{-- <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('/')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                TRANSAKSI
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right">6</span> --}}
              </p>
            </a>
            <ol>
              <li class="nav-item" style="color:white" >
                <a href="{{ route('penjualan.index') }}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Penjualan</p>
                </a>
              </li>
              {{-- <li class="nav-item" style="color:white">
                <a href="{{ route('penjualan_detail.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Return Penjualan</p>
                </a>
              </li>
              <li class="nav-item" style="color:white">
                <a href="{{ route('pembelian.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembelian</p>
                </a>
              </li> --}}
            </ol>
          </li>

        {{-- MODUL INVENTORY  --}}
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-box-open"></i>
              <p>
                INVENTORY
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <ol class="nav-item">
                  <li class="nav-item" style="color:white">
                <a href="{{ route('opname.index') }}" class="nav-link">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  {{-- <p>Stok Opname</p>
                </a>
              </li>
              <li class="nav-item" style="color:white">
                <a href="{{ route('stok.index') }}" class="nav-link"> --}}
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  {{-- <p>Inquiry Barang</p>
                </a>
              </li>
              </ol> --}}
              {{-- <li class="nav-item">
                <a href="../charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li> --}}
            {{-- </ul>
          </li> --}}
          <li class="nav-item">
             <a href="#" class="nav-link">
                <i class="fas fa-cogs"></i>
                <p>
                MASTER
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
             <ol>
                <li class="nav-item" style="color:white">
                <a href="{{ route('barang.index') }}" class="nav-link">
                    {{-- <i class="fas fa-box-open"></i> --}}
                  <p>Barang</p>
                </a>
              </li>
              <li class="nav-item" style="color:white">
                <a href="{{ route('customer.index') }}" class="nav-link">
                  {{-- <i class="far fa-circle nav-icon"></i> --}}
                  <p>Customer</p>
                </a>
              </li>
              <li class="nav-item" style="color:white">
                <a href="{{ route('supplier.index') }}" class="nav-link">
                    {{-- <i class="fas fa-id-card-alt"></i> --}}
                  <p>Supplier</p>
                </a>
              </li>
              <li class="nav-item" style="color:white">
                <a href="{{ route('salesman.index') }}" class="nav-link">
                    {{-- <i class="fas fa-id-card-alt"></i> --}}
                  <p>Salesman</p>
                </a>
              </li>
             </ol>
            </ul>
          </li>


         {{-- MODUL KAS AND BANK
          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-wallet"></i>
               <p>
               KAS BANK
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>

           <ul class="nav nav-treeview">
        <ol>
            <li class="nav-item" style="color:white">
               <a href="{{  route('test.index')  }}" class="nav-link">
                 {{-- <i class="fas fa-user-tie"></i> --}}
                 {{-- <p>Penerimaan</p>
               </a>
             </li>
             <li class="nav-item" style="color:white">
               <a href="../UI/icons.html" class="nav-link">
                 {{-- <i class="far fa-circle nav-icon"></i> --}}
                 {{-- <p>Pengeluaran</p>
               </a>
             </li>
            </ol>
           </ul>
         </li> --}}

          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                TABEL-TABEL
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <ol>
                <li class="nav-item" style="color:white">
                    <a href="{{ route('groupbarang.index') }}" class="nav-link">
                      {{-- <i class="fas fa-user-tie"></i> --}}
                      {{-- <p>Group Barang</p>
                    </a>
                </li>
                  <li class="nav-item" style="color:white">
                    <a href="{{ route('groupcustomer.index') }}" class="nav-link">
                      {{-- <i class="fas fa-user-tie"></i> --}}
                      {{-- <p>Group Customer</p>
                    </a>
                  </li>
                  <li class="nav-item" style="color:white">
                    <a href="{{ route('channel.index') }}" class="nav-link">
                      {{-- <i class="fas fa-user-tie"></i> --}}
                      {{-- <p>Channel</p>
                    </a>
                  </li>
                </ol>
            </ul>
          </li> --}}
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Inventory
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kontrol Stok</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li> --}}

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                LAPORAN
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan CSV</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Pembelian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Stok</p>
                </a>
              </li>


            </ul>
          </li>

          {{--EXTRA DI MATIKAN--}}
          {{-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register v1
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../examples/login.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/register.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/forgot-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/recover-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password v1</p>
                    </a>
                  </li>
                </ul>
              </li>
          --}}

            </ul>
          </li>


      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
