<?php
//TODO start session

session_start();// Grégoire : l'idée c'est que la session s'ouvre. Soit c'est un nouvel utilisateur et la on a aucune info
// soit c'est un utilisateur connu et dans ce cas on a les infos. Mais je ne sais pas comment faire
$_SESSION['name'] = 
$_SESSION['email'] = 
$_SESSION['password'] =
if (empty($_SESSION["login"])&& empty($_SESSION["psw"]))


?>
<?php include_once 'database.php';
var_dump($_SESSION);
?>

<?php
//TODO (in the next step) control user access

//TODO get page parameter ($_GET['page'] or $_POST['page']) and assign it into $page variable
?>
<!DOCTYPE html>
<html>
<head>      
<title>We sale</title>  
 <?php include 'header.php'?>
<?php 
if (!empty($_GET['page'])) {
  if($_GET['page'] === 'products') {
    include('products.php');
  } 
  elseif ($_GET['page'] === 'cart') {
    include('cart.php');
  }
   elseif ($_GET['page'] === 'connection') {
    include('connection.php');
  }
   elseif ($_GET['page'] === 'main') {
    include('main.php');
  }
  elseif ($_GET['page'] === 'resultdisplay') {
    include('resultdisplay.php');
  }
  elseif ($_GET['page'] === 'createAccount')
    include('createAccountPage.php');
   }
 else {
  include('main.php');
}
//if 'action/'.$page'.php' exists then include it (use file_exists($filename) function)
?>

<?php

//create one php file for each action to manage on the website

//TODO use 
//             input params (included in $_GET or $_POST)
//             $database variable (initialized in $database.php) 
// to insert or update data into database

// TODO insert the start html envelope (<html><head>....</head><body>

// TODO using $page decide to include header.php
?>

<?php

//TODO add header display

//TODO if 'view/'.$page'.php' exists then include it (use file_exists($filename) function)
//           else include 'view/main.php' (it has to exist)
?>

<?php

//create one php file for each view to manage on the website (don't forget to create on main.php view)

//TODO use 
//             input params (included in $_GET or $_POST)
//             $database variable (initialized in $database.php) 
// to get data from database (if needed)

// add view display possibly using data from database

?>

<?php include 'footer.php'?>
</body>
</html>