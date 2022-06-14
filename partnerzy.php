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
  <link href="css/modern-business.css" rel="stylesheet">

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
              <h2>AKRAPOVIČ</h2>
              <p>
                  Jako pionier w swojej branży, Akrapovič jest powszechnie uznawany za wysoce innowacyjną firmę zajmującą się technologią materiałową. Marka jest synonimem najwyższego poziomu designu, poprawy wydajności i stworzenia niepowtarzalnego głęboko rezonansowego dźwięku wydechowego. Produkty firmy są projektowane i wytwarzane do motocykli i samochodów wyczynowych przez pasjonującą i wysoko wykwalifikowaną siłę roboczą ponad 1000 pracowników przy użyciu najnowszych technologii, procesów i najlepszych materiałów. Dział R&D Racing współpracuje z dziesiątkami zespołów wyścigowych. Ponad 100 mistrzów świata już polegało na układach wydechowych Akrapovič. A to dopiero początek długiej ekscytującej jazdy.
              </p>
          </div>
          <div class="col-lg-6">
              <a class="navbar-brand" target="_blank" href="https://www.akrapovic.com/en"><img class="img-fluid rounded" src="partnerzy_zdjecia/1.png" alt=""></a>
          </div>
      </div>
      <br />
      <br />
      <div class="row">
          <div class="col-lg-6">
              <a class="navbar-brand" target="_blank" href="https://wagnertuning.com/"><img class="img-fluid rounded" src="partnerzy_zdjecia/2.png" alt=""></a>
          </div>
          <div class="col-lg-6">
              <h2>WAGNER TUNING</h2>
              <p>
                  Od 2002 roku opracowujemy i produkujemy wysokiej jakości części silnika, takie jak kolektory dolotowe, kolektory wydechowe, rury spustowe i zestawy intercoolera. Najnowsze osiągnięcia technologiczne w połączeniu z wieloletnim doświadczeniem zapewniają naszym klientom optymalną wydajność i najwyższą precyzję produkcji.
              </p>
              <p>
                  Roszczenia te zostały potwierdzone w 2013 r. Przez TÜV RHEINLAND dla działu „Produktion” (produkcja). Certyfikacja KBA stanowi uzupełnienie normy zarządzania jakością DIN EN ISO 9001. Certyfikat ten potwierdza nasze własne wewnętrzne standardy dla naszej oferty produktów przez oficjalny i certyfikowany instytut.
              </p>
              <p>
                  Nasza główna siedziba firmy i związane z nią centrum rozwoju znajduje się w Niemczech, a dodatkowe biura sprzedaży w Stanach Zjednoczonych i Wielkiej Brytanii.
              </p>
          </div>
      </div>
      <br />
      <br />
      <div class="row">
          <div class="col-lg-6">
              <h2>MILLTEK</h2>
              <p>
                  Założona w 1983 r. Przez prawdziwego entuzjastę samochodów, staliśmy się wiodącymi producentami wydajnych układów wydechowych dla stale powiększającej się gamy pojazdów.
              </p>
              <p>
                  Wszystkie nasze wydajne układy wydechowe są wykonane ze stali nierdzewnej T304L; co daje satysfakcję ze świadomości, że nasze produkty mają działać w najtrudniejszych warunkach. T304L jest bardzo trwałą formą stali nierdzewnej, która jest znacznie mniej podatna na degradację i przebarwienia niż wiele innych tego rodzaju, a jednocześnie będzie działać prawie bez końca.
              </p>
              <p>
                  Nasze przywiązanie do perfekcji naszych układów wydechowych pozwoliło nam uzyskać akredytację ISO9001: 2015, a także być w stanie osiągnąć jeden z najszerszych zakresów wydechowych układów wydechowych na rynku.
          </div>
          <div class="col-lg-6">
              <br /><br /><br /><br /><br />
             <a class="navbar-brand" target="_blank" href="https://www.millteksport.com/"><img class="img-fluid rounded" src="partnerzy_zdjecia/3.png" alt=""></a>
          </div>
      </div>
      <br />
      <br />
      <div class="row">
          <div class="col-lg-6">
              <br /><br />
             <a class="navbar-brand" target="_blank" href="https://www.remus-polska.pl/"><img class="img-fluid rounded" src="partnerzy_zdjecia/4.png" alt=""></a>
</div>
          <div class="col-lg-6">
              <h2>REMUS</h2>
              <p>
                  Chciałbyś pod maskę swego auta przygnać jeszcze trochę koni? Mamy propozycję: do współpracy zaangażuj wilka rodem z Austrii.
              </p>
              <p>
                  REMUS należy niewątpliwie do ścisłego grona światowych liderów w dziedzinie budowy układów wydechowych i innych rozwiązań podnoszących moc pojazdów.
                  Nasze produkty to efekty ciężkiej, wielomiesięcznej pracy wielu specjalistów ze sztabem inżynierów włącznie. Finalny owoc tych działań jest efektem profesjonalnych projektów, tygodni poświęceń wielu ludzi oraz setek pomiarów i testów.
              </p>
        </div>
      </div>
      <hr>
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
