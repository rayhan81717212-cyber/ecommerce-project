
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo w-100 d-flex justify-content-center">
            
            <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('assets/img/logo/logo.jpg') }}" width="70" height="70" class="rounded-circle mb-2">
                <span class="fw-bolder">Rayhan Enterprise</span>
            </div>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="/" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- users -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Layouts">User Manage</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="layouts-without-menu.html" class="menu-link">
                    <div data-i18n="Without menu">User</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/role" class="menu-link">
                    <div data-i18n="Without navbar">Role</div>
                  </a>
                </li>
              </ul>
            </li>

           
          </ul>
        </aside>