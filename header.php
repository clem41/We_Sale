

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
					<a href="index.php?page=products">Products</a></li>
				<li><a href="index.php?page=account">Account</a></li>
				<li><a href="index.php?page=cart">Cart</a></li>
				<li><div class="login">
					<form action="checkUser.php" method="post">
						<input type="text" placeholder="Username" name="username">
						<input type="Password" placeholder="Password" name="psw">
						<button type="submit">Login</button>
				</form>
			</div></li>
				<li><form action="resultdisplay.php" method="GET">
				<input id="search" name="name" type="text" placeholder="Search a product..."></form></li>
			</ul>
		</div>
	</nav>
</header>