<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>

    <link rel="icon" src="" type="image/png">

    @include('memberArea.includes.css')
</head>

<body>
    <!-- Sidenav -->
    @include('memberArea.includes.sideNav')
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        @include('memberArea.includes.topNav')
        <!-- Header -->
        <!-- Header -->
        @yield('header')
        <!-- Page content -->
        <div class="container-fluid mt--6">
            @yield('content')
            <!-- Footer -->
            @include('memberArea.includes.footer')
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    @include('memberArea.includes.js')
</body>

</html>
