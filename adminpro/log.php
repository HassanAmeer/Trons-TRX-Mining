<?

if(isset($_GET['adminlogin']))
{ 
$loginmail = $_GET['adminlogin'];
   setcookie('coklog',$loginmail,time() + 84600 ,'/');
  header('location:../../home.php');
}



?>