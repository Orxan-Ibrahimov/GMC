<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ECOURSES - Online Courses HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Links Start -->
    @include('layout.partials.links')
    <!-- Links End -->
</head>

<body>
    <!-- Topbar Start -->
    @include('layout.partials.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('layout.partials.navbar')
    <!-- Navbar End -->


    <!-- Content Start -->
    @yield('content')
    <!-- Content End -->


    <!-- Footer Start -->
    @include('layout.partials.footer')
    <!-- Footer End -->


    <!-- Scripts Start -->
    @include('layout.partials.scripts')
    <!-- Scripts End -->


</body>

</html>