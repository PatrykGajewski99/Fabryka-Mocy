<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Fabryka Mocy</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/small-business.css" rel="stylesheet">
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
    <a class="navbar-brand" href="index.php"><img height="30" src="index_zdjecia/kolo.png" alt="Tu jest obrazek" />Fabryka Mocy</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <?php
            if($_SESSION['zalogowany']==true)
            {
                ?>
                <li class="nav-item active">
            <a class="nav-link" href="partnerzy.php">Partnerzy
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hamownia.php">Hamownia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kontakt.php">Kontakt</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="edycja.php">Edycja Danych</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logowanie.php">Wyloguj</a>
          </li>
          <?php
            }
            else
            {
            ?>
                <li class="nav-item active">
            <a class="nav-link" href="logowanie.php">Logowanie</a>
          </li>
          <?php
            }
          ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
      <!-- Heading Row -->
      <div class="row align-items-center my-5">
          <div class="col-lg-7">
              <div id="przykladowaKaruzela" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img class="d-block w-100" src="index_zdjecia/1.jpg" alt="Pierwszy slajd">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="index_zdjecia/2.jpg" alt="Drugi slajd">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="index_zdjecia/3.jpg" alt="Trzeci slajd">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="index_zdjecia/4.jpg" alt="Trzeci slajd">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="index_zdjecia/5.jpg" alt="Trzeci slajd">
                      </div>
                  </div>
              </div>
          </div>
          <!-- /.col-lg-8 -->
          <div class="col-lg-5">
              <h1 class="font-weight-light">KIM JESTEŚMY</h1>
              <p>
                  Fabryka-Mocy jest najstarszą firmą zajmującą się tuningiem we wschodniej części Polski. Nieprzerwanie od 2004r oferujemy klientom szereg rozwiązań mających na celu poprawę walorów użytkowych ich aut.
                  Dzięki współpracy z firmami z całego świata jesteśmy na bieżąco z panującym trendami na tuningowej arenie.
                  We wszystkim co robimy kierujemy się pasją i zaangażowaniem - powierzając nam swoje auto, możesz być spokojny o jakość i profesjonalizm wykonywanych usług.
              </p>
          </div>
          <!-- /.col-md-4 -->
      </div>
      <!-- /.row -->
      <!-- Content Row -->
      <h2>Samochody podlegające modyfikacją.</h2><br />
      <div class="row">
          <div class="col-md-4 mb-5">
              <div class="card h-100">
                  <div class="card-body">
                      <h2 class="card-title">BMW</h2>
                      <p class="card-text">
                          BMW (Bayerische Motoren Werke) – niemiecki koncern motoryzacyjny produkujący od 1916 roku samochody osobowe, motocykle, skutery oraz silniki
                      </p>
                      <img src="index_zdjecia/bmw.png" alt="Tu jest obrazek">
                  </div>
                  <div class="card-footer">
                      <a href="bmw.php" class="btn btn-primary btn-sm">Galeria Zdjęć</a>
                  </div>
              </div>
          </div>
          <!-- /.col-md-4 -->
          <div class="col-md-4 mb-5">
              <div class="card h-100">
                  <div class="card-body">
                      <h2 class="card-title">Mercedes</h2>
                      <p class="card-text">
                          Mercedes-Benz – marka samochodów produkowanych przez koncern Daimler AG, popularnie nazywana Mercedes. Pod marką tą produkowane są samochody osobowe, dostawcze, ciężarowe i autobusy. W kategorii samochodów osobowych, Mercedes-Benz uważany jest za jedną z najstarszych. kluczowych marek, takich jak Audi, Volkswagen, Porsche, BMW i Nissan.
                      </p>
                      <img src="index_zdjecia/mercedes.png" alt="Tu jest obrazek">
                  </div>
                  <div class="card-footer">
                      <a href="mercedes.php" class="btn btn-primary btn-sm">Galeria Zdjęć</a>
                  </div>
              </div>
          </div>
          <!-- /.col-md-4 -->
          <div class="col-md-4 mb-5">
              <div class="card h-100">
                  <div class="card-body">
                      <h2 class="card-title">Audi</h2>
                      <p class="card-text">Audi – niemiecki producent premium samochodów osobowych z siedzibą w Ingolstadt w Niemczech, należący do koncernu Volkswagen AG. Założony w 1909 roku przez Augusta Horcha.Nazwa przedsiębiorstwa wywodzi się z gry słów: Audi to łacińskie tłumaczenie nazwiska Horch (oznacza „słuchaj!”). </p>
                      <img src="index_zdjecia/audi.png" alt="Tu jest obrazek">
                  </div>
                  <div class="card-footer">
                      <a href="audi.php" class="btn btn-primary btn-sm">Galeria Zdjęć</a>
                  </div>
              </div>
          </div>
          <!-- /.col-md-4 -->
      </div>
      <!-- /.row -->
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; PG 2021</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>