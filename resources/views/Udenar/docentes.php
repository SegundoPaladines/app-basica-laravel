<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Docentes</title>

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
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/estudiantes">Estudiantes</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar -->
</header>

<body style="background-color:#000;">

<div style="margin-top:110px; margin-bottom:20px;"></div>
<div style="background-color:white;">
    <table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
        <tr>
        <th>Foto</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Curso</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>
            <div class="d-flex align-items-center">
                <img
                    src="https://mdbootstrap.com/img/new/avatars/10.jpg"
                    alt=""
                    style="width: 45px; height: 45px"
                    class="rounded-circle"
                    />
            </div>
        </td>
        <td>
            <p class="text-muted mb-0">Carmen</p>
        </td>
        <td>
        <p class="text-muted mb-0">Castillo</p>
        </td>
        <td><p>Sistemas Operativos</p></td>
        </tr>
        <td>
            <div class="d-flex align-items-center">
                <img
                    src="https://mdbootstrap.com/img/new/avatars/11.jpg"
                    alt=""
                    style="width: 45px; height: 45px"
                    class="rounded-circle"
                    />
            </div>
        </td>
        <td>
            <p class="text-muted mb-0">Luna</p>
        </td>
        <td>
        <p class="text-muted mb-0">Ramirez</p>
        </td>
        <td><p>Redes de Computadores</p></td>
        </tr>
        <td>
            <div class="d-flex align-items-center">
                <img
                    src="https://mdbootstrap.com/img/new/avatars/12.jpg"
                    alt=""
                    style="width: 45px; height: 45px"
                    class="rounded-circle"
                    />
            </div>
        </td>
        <td>
            <p class="text-muted mb-0">Evellyn</p>
        </td>
        <td>
        <p class="text-muted mb-0">Del rocio</p>
        </td>
        <td><p>Inteligencia Artificial</p></td>
        </tr>
        <td>
            <div class="d-flex align-items-center">
                <img
                    src="https://mdbootstrap.com/img/new/avatars/13.jpg"
                    alt=""
                    style="width: 45px; height: 45px"
                    class="rounded-circle"
                    />
            </div>
        </td>
        <td>
            <p class="text-muted mb-0">Tania</p>
        </td>
        <td>
        <p class="text-muted mb-0">Coral</p>
        </td>
        <td><p>Robotica</p></td>
        </tr>
    </tbody>
    </table>
</div>
<div style="margin-bottom:90px;"></div>
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