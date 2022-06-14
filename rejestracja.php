<?php
	 session_start(); 
require_once "connect.php";
include_once 'Baza.php';?>
<script src="js/sweetalert.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script> 
<?php
  $data_base=new Baza($host,$db_user,$db_password,$db_name);
$tablica=array("UserName","Email");
if (filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_FULL_SPECIAL_CHARS)) 
{
    $akcja=filter_input(INPUT_POST, "submit"); 
    switch ($akcja) 
    {
            case"Rejestruj":
                {
					$UserName=$_POST['UserName'];
					$FirstName=$_POST['FirstName'];
					$LastName=$_POST['LastName'];
					$Email=$_POST['Email'];
					$Password=$_POST['Password'];
					$Password2=$_POST['Password2'];
					$_SESSION['UserName']=$UserName;
					$_SESSION['Email']=$Email;
					$HashPassword=sha1($Password);
					if($Password!=$Password2)
					{
						$_SESSION['status']="Hasła nie są identyczne.";
						$_SESSION['status_code']="error";
					}
					else
					{
					$sql="INSERT INTO users VALUES(NULL,'$UserName','$FirstName','$LastName','$Email','$HashPassword')";
					if($data_base->check_username_email($_SESSION['UserName'], $_SESSION['Email']))
					{
						
						$data_base->insert($sql);
						$_SESSION['status']="Zarejestrowano.";
						$_SESSION['status_code']="success";
						
					}
					else
					{
						$_SESSION['status']="Użytkownik o podanym loginie bądź Email widnieje w bazie.";
						$_SESSION['status_code']="error";
					}
					}
                    
                }
            break;
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
		<a class="navbar-brand" href="index.php"><img height="30" src="index_zdjecia/kolo.png" alt="Tu jest obrazek" />Fabryka Mocy</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Stronga Główna
                  <span class="sr-only">(current)</span>
                </a>
			  <li class="nav-item">
                <a class="nav-link" href="logowanie.php">Logowanie</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
	
      <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
				Rejestracja
					</span>
				</div>
				<form class="login100-form validate-form" method="post" action="rejestracja.php">
						<div class="wrap-input100 validate-input m-b-26" data-validate="UserName is required">
						<span class="label-input100">Nazwa użytkownika</span>
						<input class="input100" type="text" name="UserName" placeholder="Wpisz nazwę użytkownika" required>
						<span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="FirstName is required">
						<span class="label-input100">Imię</span>
						<input class="input100" type="text" name="FirstName" pattern="[A-ZĘÓŁŚĄŻŹĆŃ]{1}[a-zęółśążźćń]{1,}" title="Poprawny format to użycie pierwszej dużej litery bez żadnych cyfr" placeholder="Wpisz swoje imię" required>
						<span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="LastName is required">
						<span class="label-input100">Nazwisko</span>
						<input class="input100" type="text" name="LastName" pattern="[A-ZĘÓŁŚĄŻŹĆŃ]{1}[a-zęółśążźćń]{1,}" title="Poprawny format to użycie pierwszej dużej litery bez żadnych cyfr" placeholder="Wpisz swoje Nazwisko" required>
						<span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="Email" placeholder="Wpisz swój Email" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Hasło</span>
						<input class="input100" type="password" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Hasło składa się z minimum 8 znaków - małej litery, dużej litery,cyfry oraz znaku specjalnego" placeholder="Wpisz hasło" required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Powtórz hasło</span>
						<input class="input100" type="password" name="Password2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Hasło składa się z minimum 8 znaków - małej litery, dużej litery,cyfry oraz znaku specjalnego" placeholder="Wpisz hasło" required>
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						</div>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit" id="Rejestruj" value="Rejestruj">
							Rejestruj
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; PG 2021</p>
    </div>
  </footer>
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
    <script src="js/main.js"></script>
</body>
</html>