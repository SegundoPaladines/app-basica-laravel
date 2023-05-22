<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Universidad de Nariño</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!--Botstrap desde internet-->
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"
    rel="stylesheet"
    />

    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
    ></script>
</head>

<header class="fixed-top">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="/">
        <img
            src="/img/logo.jpg"
            height="80"
            alt="Udenar Logo"
            loading="lazy"
            style="margin-top: -1px;"
        />
        </a>

        <!-- Toggle button -->
        <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarButtonsExample"
        aria-controls="navbarButtonsExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/facultades">Facultades</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar -->
</header>

<body style="background-color:#000;">
    <center><video style="width: 100%; height: 100%; z-index:-1; margin-top:30px;" autoplay muted loop id="video-background">
        <source src="video/udenar-video.mp4" type="video/mp4">
    </video></center>

    <script>
        var video = document.getElementById("video-background");
        video.play();
    </script>

</body>
<footer class="text-center text-white" style=" z-index:2; margin-top:-75px; background-color: #21081a;">
  <!-- Grid container -->
  <div class="container p-4"></div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="#">Segundo Paladines</a>
  </div>
  <!-- Copyright -->
</footer>
</html>