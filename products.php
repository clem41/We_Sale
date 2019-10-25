<?php
/*if (isset($_GET['search'])){
    $recipeCode= $_GET['search'];
} else {
    include 'main.php';
    die;
}*/
?>

<!DOCTYPE html>
<html>
<head>
    <title> We sale ! Page produits </title>
    
    <link rel="stylesheet" href="productCSS.css" />
    <link rel="stylesheet" href="css/product.css" />
</head>
<body>
	 <?php include 'header.php'?>
<nav>
			<div class="ProduitCategory">
			    <a href="search.html">Search</a>
			</div>
			</div>
			<div class="ProduitCategory">
			    <a href="contact.html">Contact us</a>
			</div>
			<div class="ProduitCategory">
			    <a href="Promo.html">Nos offres de promotions</a>
			</div>
			<div class="ProduitCategory">
			    <a href=".html">Nos offres de promotions</a>
			</div>
		</nav>
<article>

<!-- inclure un menu déroulant dans le barre de recherche-->
<!-- <div id="searchbar">
    <span class="text">What would you like to search ?</span>
    <form action="">
        <input class="champ" type="text" placeholder="Search...)"/>
        <input class="bouton" type="button" value=" " />
    </form>
</div>

css : 
#searchbar{
    position:relative;
    width:1040px;
    height:auto;
    display:inline-block;
}
#searchbar .text{
    width:300px;
    float:left;    
}
#searchbar .champ{
    width:600px;
    height:35px;
    float:left;
}
#searchbar .bouton{
    background-image: url(images/searchbar_button.png);
    width: 35px;
    height: 35px;
    padding: 0;
    border:none;
    float:left;
}



<button id="submit-search"></button>
<style>#submit-search {border:none;vertical-align:middle;height:(même taille que la barre de recherche, genre 15px);(et pour faire des coins ronds à ton button :)border-radius:5px;}
Et attention ! Pour un input, si tu veux un effet "Google" (c'est-à-dire il y a du texte qui disparait quand on clique) utilise le terme

placeholder="(ton texte)"

-->

<aside>
Notre histoire est en cours d'écriture.

      <dl>
        <dt>Notre chartre produits</dt>
        <dd>Nous sommes éco-responsable et limitons le plus possible la production de déchets.
        </dd>
      </dl>
    </aside>
</article>		

<img id="art1" src="cereales.jpg"/><br>
<article>
        
                        <input type="submit" value=" Ajouter au panier">
                        son prix est de : <?php echo $article1['unit_price'];?><br>
                        description de l'objet : <?php echo $article1['description']; ?> <br>
                    </p>
                        <?php echo $article1['name'];?><br>
                    <p>
</article>
<br/>
<img id="art2" src="cereales.jpg"/>
<article>
        
                        <input type="submit" value=" Ajouter au panier"> 
                        son prix est de : <?php echo $article1['unit_price']; ?><br>
                        description de l'objet : <?php echo $article1['description']; ?> <br>
                    </p>
                        <?php echo $article1['name']; ?><br>
                    <p>
</article>
<br/>
<img id="art3" src="sponge.jpg"/>
<article>
        
                        <input type="submit" value=" Ajouter au panier">
                        son prix est de : <?php echo $article1['unit_price']; ?><br>
                        description de l'objet : <?php echo $article1['description']; ?> <br>
                    </p>
                        <?php echo $article1['name']; ?><br>
                    <p>
</article>
<br/>	

<footer>
        <?php include 'footer.php'?>
    </footer>
</body>