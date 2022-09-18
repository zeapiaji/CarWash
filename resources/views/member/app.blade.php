<!DOCTYPE html>
<html lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/falcon/v3.4.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Sep 2022 09:30:02 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    @include('member.partials.head')
</head>

<body>
    <!-- ===============================================-->
    <!-- Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
            <!-- ===============================================-->
            <!-- Navbar -->
            <!-- ===============================================-->
            {{-- @include('admin.partials.navbar') --}}

            <div class="content">
                <!-- ===============================================-->
                <!-- Sidebar -->
                <!-- ===============================================-->
                {{-- @include('admin.partials.sidebar') --}}

                    <!-- ===============================================-->
                    <!-- Content -->
                    <!-- ===============================================-->
                    @yield('index')

                <!-- ===============================================-->
                <!-- Footer -->
                <!-- ===============================================-->
                {{-- @include('admin.partials.footer') --}}
            </div>

    </main>
    <!-- ===============================================-->
    <!-- End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!-- JavaScripts -->
    <!-- ===============================================-->
    @extends('member.partials.js')
</body>


<!-- Mirrored from prium.github.io/falcon/v3.4.0/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Sep 2022 09:31:30 GMT -->

</html>
