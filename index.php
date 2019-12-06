<?php
//TODO start session
ini_set('session.use_cookies', 0);
ini_set('session.use_only_cookies', 0); //是否仅用cookie
ini_set('session.use_trans_sid', 1); //是否自动url带上session id
ini_set('session.name', 'sid');

session_id($_GET[session_name()]);
if(isset($_GET[session_name()])){
session_start();
}	

?>
<?php include_once 'database.php';

?>

<?php
//TODO (in the next step) control user access

//TODO get page parameter ($_GET['page'] or $_POST['page']) and assign it into $page variable
?>
<!DOCTYPE html>
<html>
<head>      
    <link rel="stylesheet" href="productCSS.css" />
	<link rel="stylesheet" href="display.css" />
</head>
<body>
<div class="category">
<?php include 'header.php'?>
</div>

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
   elseif ($_GET['page'] === 'account') {
    include('createAccountPage.php');
  }
  elseif ($_GET['page'] === 'resultdisplay') {
    include('resultdisplay.php');
  }
  elseif ($_GET['page'] === 'deconnection')
    include('deconnection.php');
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