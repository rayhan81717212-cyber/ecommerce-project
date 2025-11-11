@include('admin.layout.headerLink')

<!-- Menu -->
@include('admin.layout.sideber')
<!-- / Menu -->

<!-- Layout container -->
<div class="layout-page">
    <!-- Navbar -->
    @include('admin.layout.nav')

    <!-- / Navbar -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        @yield('content')
   

        <!-- / Content -->


@include('admin.layout.footer')
@yield('scripts')