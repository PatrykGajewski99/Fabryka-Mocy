<?php
session_start();
if($_SESSION['zalogowany'])
{
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
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img height="30" src="index_zdjecia/kolo.png" alt="Tu jest obrazek" />Fabryka Mocy</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Stronga Główna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="partnerzy.php">Partnerzy</a>
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
        </ul>
      </div>
    </div>
  </nav>
  <!-- Page Content -->
  <div class="container">
      <br />
      <br />
      <br />
      <!-- Features Section -->
      <div class="row">
          <div class="col-lg-6">
              <h2>MAHA MSR 500</h2>
              <p>
                  Hamownie MAHA należą do najbardziej profesjonalnych urządzeń pomiarowych na świecie. Posiadają certyfikaty TUV i CE oraz aprobatę większości koncernów samochodowych.
                  MSR jest najwyżej pozycjonowanym modelem hamowni stacjonarnej spośród oferowanych przez firmę MAHA.
                  Dzięki dopracowanej technice zapewnia najlepsze możliwości pomiarów przy ciągłym obciążeniu podczas modyfikowania pojazdów.
              </p>
              <p>
                  Dzięki temu możliwa jest kontrola aut wyposażonych we wszelkie rodzaje napędów - na cztery koła, jak i napędów na jedną oś.
                  Kalibrację hamowni wykonuje serwis MAHA, nie właściciel jak w większości konkurencyjnych urządzeń na Naszym rynku. Dlatego możemy liczyć na wiarygodny wynik pomiaru,na który nie ma wpływu operator sprzętu.
              </p>
          </div>
          <div class="col-lg-6">
              <div id="przykladowaKaruzela1" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img class="d-block w-100" src="hamownia_zdjecia/1.jpg" alt="Pierwszy slajd">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="hamownia_zdjecia/4.jpg" alt="Drugi slajd">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="hamownia_zdjecia/5.jpg" alt="Trzeci slajd">
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <br />
      <br />
      <div class="row">
          <div class="col-lg-6">
              <div id="przykladowaKaruzela2" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img class="d-block w-100" src="hamownia_zdjecia/2.jpg" alt="Pierwszy slajd">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="hamownia_zdjecia/6.jpg" alt="Drugi slajd">
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6">
              <h2>HAMOWNIA WOM MAHA ZW500</h2>
              <p> Hamownia MAHA ZW500 to mobilne urządzenie pomiarowe przystosowane do wymagań nowoczesnego rolnictwa.</p>
              <p>Pomiar mocy odbywa się za pośrednictwem WOM co pozwala na wygodne testy sprzętu w każdych warunkach.</p>
              <p>Ponadto dysponujemy w pełni wyposażonym wozem technicznym, który przyjeżdża na dowolne miejsce wraz z całym potrzebnym osprzętem by tuning wykonać sprawnie i kompleksowo.</p>
          </div>
      </div>
      <br />
      <br />
      <div class="row">
          <div class="col-lg-6">
              <h2>HAMOWNIA DLA SAMOCHODÓW CIĘŻAROWYCH</h2>
              <p>
                  Hamownia podwoziowa MAHA LPS 3000/R200 to produkt dedykowany do samochodów ciężarowych.
Obok klasycznego pomiaru mocy silnika, momentu obrotowego oraz symulacji obciążenia LPS 3000 oferuje szerokie możliwości diagnostyczne.
              </p>
              <p>
                  Możliwość podłączenia zewnętrznych urządzeń pomiarowych takich jak np: dymomierz lub miernik zużycia paliwa dodatkowo poszerza możliwości zastosowania tego urządzenia.
                  Prosto i logicznie zbudowane oprogramowanie jak i znakomita prezentacja wartości pomiarowych dodatkowo wyróżnia to stanowisko.
              </p>
              <p>
                  Dzięki dodatkowym rolkom wolnobieżnym możliwy jest pomiar samochodów ciężarowych z napędem dwuosiowym.
                  Hydrauliczny dociążacz osi zapewnia właściwą trakcję opon na rolkach.
              </p>
                  </div>
          <div class="col-lg-6">
              <div id="przykladowaKaruzela3" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img class="d-block w-100" src="hamownia_zdjecia/3.jpg" alt="Pierwszy slajd">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="hamownia_zdjecia/7.jpg" alt="Drugi slajd">
                      </div>
                    
                  </div>
              </div>
          </div>
      </div>
      <br />
      <br />

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
<?php
}
else
{
    header("location:logowanie.php");
}
