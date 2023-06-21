<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-danger text-white fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">RIMA RAHMAWATI</a>
            <button class="navbar-toggler text-white font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a href="profil" class="nav-link {{ Request::segment(1)=='profil'?'active':'' }}">Profil</a></li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a href="portofolio" class="nav-link {{ Request::segment(1)=='portofolio'?'active':'' }}">Portofolio</a></li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a href="contact" class="nav-link {{ Request::segment(1)=='contact'?'active':'' }}">Contact</a></li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a href="home" class="nav-link {{ Request::segment(1)=='home'?'active':'' }}">Home</a></li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a href="logout" class="nav-link">Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top: 7%">
        @yield('content')
    </div>
    <script>
    $(document).ready(function () {
    $('tabel').DataTable();


    });</script>
</body>
</html>


