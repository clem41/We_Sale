<?php  include_once database.php;
//$bddnew PDO('mysql:host=localhost:dbname=dump','root','root')	?>

<header>   
	<link rel="stylesheet" href="header.css" /> 
	<a id="headertitle" href="main.php">We sale</a>
	<nav>
		<div class="category">
			<ul class="category_nav">
				<li><a href="main.php">Home</a></li>
				<li>
					<!--
					<span class="product.php">Products</span></li>
					<div class="withSeveralLinks">
					</div>
					-->
					<a href="products.php">Products</a></li>
				<li><a href="createAccountPage.php">Account</a></li>
				<li><a href="cart.php">Cart</a></li>
				<li><div class="login">
					<form action="account.php">
						<input type="text" placeholder="Username" name="username">
						<input type="text" placeholder="Password" name="psw">
						<button type="submit">Login</button>
				</form>
			</div></li>
				<li><form action="resultdisplay.php" method="GET">
				<input id="search" name="name" type="text" placeholder="Search a product..."></form></li>
			</ul>
		</div>
	</nav>
</header>