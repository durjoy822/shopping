<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('admin.layout.head')

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper dark-sidebar" id="pageWrapper">
        <!-- Page Header Start-->
        @include('admin.layout.header')
        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            @include('admin.layout.sidebar')
            <!-- Page Sidebar Ends-->

            <!-- index body start -->
            @yield('content')
            <!-- index body end -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    @include('admin.layout.modal')
    <!-- Modal End -->

@include('admin.layout.script')
</body>
</html>
