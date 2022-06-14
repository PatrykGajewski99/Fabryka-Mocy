<?php
     session_start(); 
require_once "connect.php";
include_once 'Baza.php';
$data_base=new Baza($host,$db_user,$db_password,$db_name);
$user=$_SESSION['username'];
$sql="DELETE FROM users WHERE UserName='$user'";
$pole1=array("FirstName");
$sql1="SELECT FirstName FROM users where UserName='$user'";
$firstname=$data_base->select($sql1,$pole1);
$pole2=array("LastName");
$sql2="SELECT LastName FROM users where UserName='$user'";
$lastname=$data_base->select($sql2,$pole2);
$pole3=array("Email");
$sql3="SELECT Email FROM users where UserName='$user'";
$email=$data_base->select($sql3,$pole3);
if (filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_FULL_SPECIAL_CHARS)) 
{
    $akcja=filter_input(INPUT_POST, "submit"); 
    switch ($akcja) 
    {
            case"Usun":
                {
                    if($data_base->delete($sql))
                    {
                        
                        header("location:index.php");
                        $_SESSION['zalogowany']=false;
                        $_SESSION['status']="Użytkownik usunięty z bazy.";
                        $_SESSION['status_code']="error";
                    }
                }
                break;
                 case "Edytuj":
                    {
                        $update_firstname=$_POST['FirstName'];
                        $update_lastname=$_POST['LastName'];
                        $update_email=$_POST['Email'];
                        $update_password=$_POST['Password'];
                        $update_password2=$_POST['Password2'];
                        $update_hashpassword=sha1($update_password);
                        if($update_password!=$update_password2)
                        {
                          $_SESSION['status']="Zmienione hasła nie są identyczne.";
                          $_SESSION['status_code']="error";
                        }
                        else
                        {
                        if($email!=$update_email)
                        {
                            if($data_base->check_email($update_email))
                            {
                                $_SESSION['status']="Użytkownik o podanym Email widnieje w bazie.";
						        $_SESSION['status_code']="error";
                            }
                            else
                            {
                                $zapytanie="UPDATE users SET UserName='$user',FirstName='$update_firstname',LastName='$update_lastname',Email='$update_email',passwd='$update_hashpassword' WHERE UserName='$user'";
                                if($data_base->insert($zapytanie))
                                {
                                    $_SESSION['status']="Dane zostały zmienione.";
                                    $_SESSION['status_code']="success";
                                    sleep(3);
                                    header("location:index.php");
                                    $_SESSION['zalogowany']=false;
                                }
                            }
                        }
                        else
                        {
                            $zapytanie="UPDATE users SET UserName='$user',FirstName='$update_firstname',LastName='$update_lastname',Email='$email',passwd='$update_hashpassword' WHERE UserName='$user'";
                                if($data_base->insert($zapytanie))
                                {
                                    $_SESSION['status']="Dane zostały zmienione.";
                                    $_SESSION['status_code']="success";
                                    sleep(3);
                                    header("location:index.php");
                                    $_SESSION['zalogowany']=false;
                                }
                        }
                      }
                    }
                    break;
}
            }
           
if($_SESSION['zalogowany'])
{
?>
<script src="js/sweetalert.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script> 
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
                <a class="nav-link" href="hamownia.php">Hamownia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kontakt.php">Kontakt</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="partnerzy.php">Partnerzy</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logowanie.php">Wyloguj</a>
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
				Edycja Danych
					</span>
				</div>
				<form class="login100-form validate-form" action="edycja.php" method="post">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="FirstName is required">
						<span class="label-input100">Imię</span>
						<input class="input100" type="text" name="FirstName" value="<?php echo $firstname ?>" pattern="[A-ZĘÓŁŚĄŻŹĆŃ]{1}[a-zęółśążźćń]{1,}" title="Poprawny format to użycie pierwszej dużej litery bez żadnych cyfr" placeholder="Wpisz swoje imię" required>
						<span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="LastName is required">
						<span class="label-input100">Nazwisko</span>
						<input class="input100" type="text" name="LastName"  value="<?php echo $lastname?>" pattern="[A-ZĘÓŁŚĄŻŹĆŃ]{1}[a-zęółśążźćń]{1,}" title="Poprawny format to użycie pierwszej dużej litery bez żadnych cyfr" placeholder="Wpisz swoje Nazwisko" required>
						<span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="Email" value="<?php echo $email ?>" placeholder="Wpisz swój Email" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Hasło</span>
						<input class="input100"  type="password" value="<?php echo $_SESSION['password'] ?>" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Hasło składa się z minimum 8 znaków - małej litery, dużej litery,cyfry oraz znaku specjalnego" placeholder="Wpisz hasło" required>
						<span class="focus-input100"></span>
					</div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Powtórz hasło</span>
						<input class="input100"  type="password" value="<?php echo $_SESSION['password'] ?>" name="Password2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Hasło składa się z minimum 8 znaków - małej litery, dużej litery,cyfry oraz znaku specjalnego" placeholder="Wpisz hasło" required>
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						</div>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit" id="Edytuj" value="Edytuj">
							Edytuj
                        </button>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        <button class="login100-form-btn" name="submit" id="Usun" value="Usun">
							Usuń Konto
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
<?php
}
else
{
    header("location:logowanie.php");
}