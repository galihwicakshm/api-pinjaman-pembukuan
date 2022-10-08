<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="#" class="app-brand-link">
            <span class="app-brand-logo demo">

            </span>
            <div class="container">
              <span class="app-brand-text demo menu-text fw-bolder ms-2">Admin</span>
            </div>
          </a>


          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
       

           
          </li>
            <li class="menu-item <?php if((Request::segment(2) == 'pelanggans' || 'datapelanggans')){
              echo "active";
            } ?>">
             <a href="{{ url('app/pelanggans') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
              <div data-i18n="Analytics">Pelanggan</div>
            </a>
          </li>
          

          <!-- Layouts -->
          

        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->