<?php  
	
	function addToCart($articleId){
		$bdd = new PDO('mysql:host=localhost;dbname=dump','root','');
		$req = 'SELECT * FROM products where id='.$articleId ; 
		
		$response = $bdd->query($req); 
			 
			if ($article1 = $response->fetch())  
			{ 
			 
			 
				$request = "INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES ('', '', '".$article1['id']."', '1', '".$article1['unit_price']."', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)"; 
			 
				
			 
			} 
			$response1 = $bdd->exec($request); 
	 
	 
		$response->closeCursor(); 
		$response->closeCursor();
	}
?>
	