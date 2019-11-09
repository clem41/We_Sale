<header>   
	<link rel="stylesheet" href="header.css" /> 
	<a id="headertitle" href="index.php?page=main">We sale</a>
	<nav>
		<div class="category">
			<ul class="category_nav">
				<li><a href="index.php?page=main">Home</a></li>
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
					<form action="index.php?page=check" method="post">
						<input type="text" placeholder="Username" name="username">
						<input type="Password" placeholder="Password" name="psw">
						<button type="submit">Login</button>
				</form>
			</div></li>
				<li><form action="index.php?page=resultdisplay" method="post">
				<input name="name" type="text" placeholder="Search a product..."></form></li>
			</ul>
		</div>
	</nav>
</header>