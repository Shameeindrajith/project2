<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>

    <link rel="icon" src="" type="image/png">

    @include('adminArea.includes.css')
</head>

<body>
    <!-- Sidenav -->
    @include('adminArea.includes.sidebar')
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        @include('adminArea.includes.nav')
        <!-- Header -->
        <!-- Header -->
        @yield('header')
        <!-- Page content -->
        <div class="container-fluid mt--6">
            @yield('content')
            <!-- Footer -->
            @include('adminArea.includes.footer')
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    @include('adminArea.includes.js')
</body>

</html>
