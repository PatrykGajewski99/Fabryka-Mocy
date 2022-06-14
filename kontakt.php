<?php
session_start();
if($_SESSION['zalogowany'])
{
?>
<script src="js/sweetalert.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script> 
<?php
if (filter_input(INPUT_GET, 'submit', FILTER_SANITIZE_FULL_SPECIAL_CHARS)) 
{
    $akcja=filter_input(INPUT_GET, "submit"); 
    switch ($akcja) 
    {
            case"Wyslij":
                {
                $imie=$_GET['imie'];
                $nazwisko=$_GET['nazwisko'];
                $temat=$_GET['temat'];
                $telefon=$_GET['telefon'];
                $email=$_GET['email'];
                $wiadomosc=$_GET['wiadomosc'];
                $to="patryk.gajewski@pollub.edu.pl";
                $headers="From: '$email";
                $zawartosc="";
                $zawartosc.="OD: ".$imie." ".$nazwisko."\r\n";
                $zawartosc.="Email kontaktowy: ".$email."\r\n";
                $zawartosc.="Telefon kontatkowy: ".$telefon."\r\n";
                $zawartosc.="Treść: ".$wiadomosc."\r\n";
                if(mail($to, $temat, $zawartosc,$headers))
                {
                    $_SESSION['status']="Wysłano Email.";
                    $_SESSION['status_code']="success";
                }
             
                
                }
                break;   
}
}
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Fabryka Mocy</title>
    <script src="funkcja.js">
    </script>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Strona Główna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hamownia.php">Hamownia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="partnerzy.php">Parnterzy</a>
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
    <br /><br />
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">
            <small>Kontakt</small>
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
        </ol>
        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-lg-8 mb-4">
                <!-- Embedded Google Map -->
                <img class="img-fluid rounded" src="kontakt_zdjecia/kontakt.png" alt="">
            </div>
            <!-- Contact Details Column -->
            <div class="col-lg-4 mb-4">
                <h3>Dane Kontaktowe</h3>
                    Patryk Gajewski
                    <br>
                    Pana Balcera 18
                    <br>
                    20-631 Lublin
                <p></p>
                    <h5>Telefon</h5>794-003-861
             <p></p>
                        <h5>E-mail</h5>
                        <a href="mailto:pgajewsk99@gmail.com">
                            pgajewsk99@gmail.com
                        </a>
                <p></p>
                    <h5>Godziny otwarcia</h5>
                    Poniedziałek: 8:00-18:00
                   <br /> Wtorek: 8:00-18:00
                    <br />Środa: 8:00-18:00
                    <br />Czwartek: 8:00-18:00
                    <br />Piątek: 8:00-16:00
                    <br />Sobota: 10:00-14:00
                
            </div>
        </div>
        <!-- /.row -->
        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-lg-8 mb-4">
                <h5>Wyślij do nas wiadomość, jeśli masz jakiekolwiek pytania. Nasz dział skontaktuje się z Państwem najszybciej jak tylko będzie to możliwe.</h5>
                <form name="sentMessage" id="contactForm" >
                    <div class="control-group form-group">
                        <form action="kontakt.php" method="get">
                        <div class="controls">
                            <label>Imię:</label>
                            <input type="text" name="imie" pattern="[A-ZĘÓŁŚĄŻŹĆŃ]{1}[a-zęółśążźćń]{1,}" title="Poprawny format to użycie pierwszej dużej litery bez żadnych cyfr" class="form-control" id="imie" required data-validation-required-message="Podaj swoje imię.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nazwisko:</label>
                            <input type="text" name="nazwisko" pattern="[A-ZĘÓŁŚĄŻŹĆŃ]{1}[a-zęółśążźćń]{1,}" title="Poprawny format to użycie pierwszej dużej litery bez żadnych cyfr" class="form-control" id="nazwisko" required data-validation-required-message="Podaj swoję nazwisko.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Temat:</label>
                            <input type="text" name="temat" class="form-control" id="temat" required data-validation-required-message="Podaj temat rozmowy.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Numer telefonu:</label>
                            <input type="tel" class="form-control" name="telefon" placeholder="xxx-xxx-xxx" title="Poprawny format to: xxx-xxx-xxx" pattern="[0-9]{3,}-[0-9]{3,}-[0-9]{3,}" id="telefon" required data-validation-required-message="Podaj swój numer telefonu.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Adres e-mail do korespondencji:</label>
                            <input type="email" class="form-control" name="email" placeholder="example@gmail.com" id="email" required data-validation-required-message="Podaj proszę swój e-mail.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Wiadomość:</label>
                            <textarea rows="10" cols="100" name="wiadomosc" class="form-control" id="wiadomosc" required data-validation-required-message="Podaj treść wiadomość" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary"  name="submit" id="Wyslij" value="Wyslij">Wyślij wiadomość</button>
                    </form>
                </form>
                <br />
                <div id="list">
                </div>
            </div>
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
    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script>
swal({
  title: "<?php echo $_SESSION['status']; ?>",
  icon: "<?php echo $_SESSION['status_code'];?>",
  button: "OK!",
});
  <?php
  unset($_SESSION['status']);
?>
		</script>
</body>

</html>
<?php
}
else
{
    header("location:logowanie.php");
}
