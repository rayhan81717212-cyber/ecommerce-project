
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
            <li class="menu-item {{ request()->is('/') ? 'active' : '' }}">
              <a href="{{ url('/') }}" class="menu-link">
                {{-- <i class="menu-icon tf-icons bx bx-home-circle"></i> --}}
                <div class="d-flex align-items-center gap-2">
                    <h4 class="mb-0">📊</h4>
                    <span class="fs-6">Dashboard</span>
                </div>

              </a>
            </li>

            <!-- 📦 Product Management Manage -->
            <li class="menu-item {{ request()->is('product*') || request()->is('categories*') || request()->is('brand*') ? 'active' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                {{-- <i class="menu-icon tf-icons bx bx-cart"></i> --}}
                <div class="d-flex align-items-center gap-2">
                    <h4 class="mb-0">📦</h4>
                    <span class="fs-6">Production Management</span>
                </div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item {{ request()->is('product') ? 'active' : '' }}">
                  <a href="{{ url('/product') }}" class="menu-link">
                    <div class="d-flex align-items-center gap-2">
                      <h5 class="mb-0">🧾</h5>
                      <span class="fs-6">All Products</span>
                    </div>
                  </a>
                </li>

                <li class="menu-item {{ request()->is('categories') ? 'active' : '' }}">
                  <a href="{{ url('categories') }}" class="menu-link">
                    <div class="d-flex align-items-center gap-2">
                      <h5 class="mb-0">🏷️</h5>
                      <span class="fs-6">Categories</span>
                    </div>
                  </a>
                </li>
                <li class="menu-item {{ request()->is('brand') ? 'active' : '' }}">
                  <a href="{{ url('brand') }}" class="menu-link">
                    <div class="d-flex align-items-center gap-2">
                      <h5 class="mb-0">🌐</h5>
                      <span class="fs-6">Brand</span>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- 📦 Order Management Manage -->
            <li class="menu-item {{ request()->is('product*') || request()->is('categories*') || request()->is('brand*') ? 'active' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                {{-- <i class="menu-icon tf-icons fas fa-file-lines"></i> --}}
                <div class="d-flex align-items-center gap-2">
                    <h4 class="mb-0">🧾</h4>
                    <span class="fs-6">Orders Management</span>
                </div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item {{ request()->is('product') ? 'active' : '' }}">
                  <a href="{{ url('product') }}" class="menu-link">
                    <div class="d-flex align-items-center gap-2">
                      <h5 class="mb-0">🛍️</h5>
                      <span class="fs-6">All Orders</span>
                    </div>
                    
                  </a>
                </li>

                <li class="menu-item {{ request()->is('categories') ? 'active' : '' }}">
                  <a href="{{ url('categories') }}" class="menu-link">
                    <div class="d-flex align-items-center gap-2">
                      <h5 class="mb-0">⏳</h5>
                      <span class="fs-6">Pending Orders</span>
                    </div>
                  </a>
                </li>
                <li class="menu-item {{ request()->is('brand') ? 'active' : '' }}">
                  <a href="{{ url('brand') }}" class="menu-link">
                    <div class="d-flex align-items-center gap-2">
                      <h5 class="mb-0">🚚</h5>
                      <span class="fs-6">Delivered Orders</span>
                    </div>
                  </a>
                </li>
                <li class="menu-item {{ request()->is('brand') ? 'active' : '' }}">
                  <a href="{{ url('brand') }}" class="menu-link">
                    <div class="d-flex align-items-center gap-2">
                      <h5 class="mb-0">❌</h5>
                      <span class="fs-6">Cancelled Orders</span>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- User Manage -->
            <li class="menu-item {{ request()->is('user*') || request()->is('role*') ? 'active' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div>User Manage</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item {{ request()->is('user') ? 'active' : '' }}">
                  <a href="{{ url('user') }}" class="menu-link">
                    <div>User</div>
                  </a>
                </li>

                <li class="menu-item {{ request()->is('role') ? 'active' : '' }}">
                  <a href="{{ url('role') }}" class="menu-link">
                    <div>Role</div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>

        </aside>