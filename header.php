<?php  //include 'data.php'	?>

<header><a id="headertitle" href="main.php">We sale</a>
	<nav>
		<div class="category">
			<ul class="category_nav">
				<li><a href="main.html">Home</a></li>
				<li><span class="product.php">Products</span></li>
				<div class="withSeveralLinks">
				</div>
				<li><a href="createAccountPage.php">Account</a></li>
				<li><a href="cart.php">Cart</a></li>
				<li><div class="login">
					<form action="account.php">
						<input type="text" placeholder="Username" name="username">
						<input type="text" placeholder="Password" name="psw">
						<button type="submit">Login</button>
				</form>
			</div></li>
				<li><form action="product.php" method="GET">
				<input id="search" type="text" placeholder="Search a product..."></form></li>
			</ul>
		</div>
	</nav>
</header>