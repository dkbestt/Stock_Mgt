<!DOCTYPE html>
<html lang="en">

<!-- title, css, meta etc. imports here -->
@include('layout.css')

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        
        @include('header.header')
        
        @include('sidebar.left_sidebar')

        
        <div class="page-wrapper">
            <!-- @yield('content') -->
            @include('pages.dashboard')
            
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by
                <a href="#">WrapPixel</a>.
            </footer>
        </div>
    </div>

    <!-- all script imports -->
    @include('layout/script')
</body>

</html>