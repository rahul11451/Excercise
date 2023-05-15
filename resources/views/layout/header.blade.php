@php
    include 'filepath.php';
@endphp
@php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include '../../controller/header.php';
include 'filepath.php';

session_start();
@endphp
@if (isset($_POST['logout'])) 
    @if (isset($_SESSION['user_id']))
        @php
            unset($_SESSION['user_id']);
        @endphp
    @php
    header('Location: ' . SITE_URL . '/index.php');
    @endphp

@if (isset($_SESSION['user_id'])) {
    @php $log = '<form action="" class="" method="post"><input type="submit" value="Logout" class="dropdown-item text-dark" name="logout"></form>'; @endphp
}
@else {
    @php $log = '<a href="' @endphp @php $log .= SITE_URL;
    $log .= '/view/login.php" class="dropdown-item text-dark">Login</a></li>

<li class="nav-item">
    <a href="' . SITE_URL . '/view/registrationForm.php" class="dropdown-item text-dark">Sign-Up</a>'; @endphp
}

{{-- text hover
index.php --}}

@if ($_SERVER['PHP_SELF'] == "/justDial/index.php" || $_SERVER['PHP_SELF'] == "/justDial/view/admin/index.php") {
    @php $index =  'text-danger text-decoration-underline'; @endphp
} @else {
    @php $index =  'text-dark'; @endphp
}

{{-- service file --}}
@if ($_SERVER['PHP_SELF'] == "/justDial/view/user/serviceList.php" || $_SERVER['PHP_SELF'] == "/justDial/view/admin/addServices.php") {
    @php $service =  'text-danger text-decoration-underline'; @endphp
} @else {
    @php $service =  'text-dark'; @endphp
}

{{-- // service provider file --}}
@if ($_SERVER['PHP_SELF'] == "/justDial/view/user/contact.php" || $_SERVER['PHP_SELF'] == "/justDial/view/admin/addProvider.php") {
    @php $provider =  'text-danger text-decoration-underline'; @endphp
} @else {
    @php $provider =  'text-dark'; @endphp
}


{{-- // adjust link regarding admin and user side
// index file --}}

@if (preg_match('/admin/', $_SERVER['PHP_SELF'])) {
    @php $indexFile =  SITE_URL . '/view/admin/index.php'; @endphp
} @else {
    @php $indexFile =  SITE_URL . '/index.php'; @endphp
}

@if (preg_match('/admin/', $_SERVER['PHP_SELF'])) {
    @php $serviceFile =  SITE_URL . '/view/admin/addServices.php'; @endphp
} @else {
    @php $serviceFile =  SITE_URL . '/view/user/serviceList.php'; @endphp
}

@if (preg_match('/admin/', $_SERVER['PHP_SELF'])) {
    @php
    $site =  SITE_URL . '/view/admin/addProvider.php';
    $siteName = 'Service Providers';
    @endphp
} @else {
    @php
    $site =  SITE_URL . '/view/user/contact.php';
    $siteName = 'Contact Us';
    @endphp
}

@if (preg_match('/admin/', $_SERVER['PHP_SELF'])) {
    @php $aboutName = ''; @endphp
} @else {
    @php
    $about =  SITE_URL . '/view/user/aboutUs.php';
    $aboutName = 'About Us';
    @endphp
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CarServ - Car Repair HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="@php {{ SITE_URL }} @endphp/lib/animate/animate.min.css" rel="stylesheet">
    <link href="@php {{ SITE_URL }} @endphp/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="@php {{ SITE_URL }} @endphp/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    {{-- <!-- <link href="@php {{ SITE_URL }} @endphp/css/bootstrap.min.css" rel="stylesheet"> --> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="@php {{ SITE_URL }} @endphp/css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.4/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Template Stylesheet -->
    <link href="@php {{ SITE_URL }} @endphp/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-danger h1" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow fixed-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-danger"><i class="fa fa-map-marker-alt text-danger me-2"></i>JustDial</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="@php {{ $indexFile }} @endphp" class="@php {{ $index }} @endphp nav-item nav-link active">Home</a>
                <a href="@php {{ $serviceFile }} @endphp " class="@php {{ $service }} @endphp nav-item nav-link">Services</a>
                <a href="@php {{ $site }} @endphp" class="@php {{ $provider }} @endphp nav-item nav-link"><?php echo $siteName; ?></a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown">Account</a>
                    <div class="dropdown-menu fade-up m-0">
                        @php
                         {{ $log }}
                        @endphp
                    </div>
                </div>
            </div>
            <a href="" class="btn btn-danger py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
</body>
</html>