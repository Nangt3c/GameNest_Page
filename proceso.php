<body>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GameNest | Contacto</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link href="contact.css" rel="stylesheet" type="text/css" />
  <!-- Fontawesome-->
  <script src="https://kit.fontawesome.com/d6098394de.js" crossorigin="anonymous"> </script>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@800&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>
  <!-- Navbar -->
  <div class="container-fluid navbar-style">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><span><img src="img/logo.png"></span>GameNest</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacto.html">Contacto</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </div>
  
  <!-- Programa php -->
  <p class="text-start">Asunto: <?php echo $_POST["flexRadioDefault"]; ?> </p>
  <p class="text-start">Nombre: <?php echo $_POST["name"]; ?> </p>
  <p class="text-start">Email: <?php echo $_POST["email"]; ?> </p>
  <p class="text-start">Mensaje: <?php echo $_POST["mensaje"]; ?> </p>
  
  
   <!-- Footer -->
  <footer>
    <h4>Entérate de proximos lanzamientos en redes sociales</h4>
    <span>
      <a href="https://www.youtube.com"><i class="fa-brands fa-youtube"></i></a>
    </span>
    <span>
      <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
    </span>
    <span>
      <a href="https://www.twitter.com/"><i class="fa-brands fa-square-twitter"></i>
      </a>
    </span>
    <h6>©Copyright 2022 | GameNest | Todos los derechos reservados</h6>
    <h6>Creado por Joshua Asomoza Barrera <a href="contacto.html" class="contact-a">Contacto</a></h6></h6>
  </footer>

  <!-- Bootstrap_functions -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>