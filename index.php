<?php
//TODO start session
session_start()

//TODO include database.php file
//mysql_select_db($bd_projet) or DIE('Error: database name is not available');

?>

<?php
//TODO assign database connexion into $database variable


//TODO include checkUser.php file
?>

<?php
//TODO (in the next step) control user access

//TODO get page parameter ($_GET['page'] or $_POST['page']) and assign it into $page variable
?>
<!DOCTYPE html>
<html>
<?php 
if (!empty($_GET['page'])) {
  if($_GET['page'] === 'products') {
    include('products.php');
  } 
  elseif($_GET['page'] === 'account') {
    include('createAccountPage.php');
  } 
  elseif ($_GET['page'] === 'cart') {
    include('cart.php');
  }
  else {
    include('main.php');

  }
} else {
  include(main.php);
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