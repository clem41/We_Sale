<?php
if (isset($_GET['search'])){
    $recipeCode= $_GET['search'];
} else {
    include 'main.php';
    die;
}
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
Notre histoire, c'est l'histoire d'une équipe qui se faisait chier dans sa vie et qui a décidé de faire une école d'ingénieur pour s'occuper.

      <dl>
        <dt>Notre chartre produits</dt>
        <dd>Nous sommes éco-responsable et limitons le plus possible la production de déchets.
        </dd>
      </dl>
    </aside>
</article>		

<img id=" " src=" "/>
<article>
	mettre commentaire produit
</article>
<br/>
<img id=" " src=" "/>
<article>
	mettre commentaire produit
</article>
<br/>
<img id=" " src=" "/>
<article>
	mettre commentaire produit
</article>
<br/>	

<footer>
        <?php include 'footer.php'?>
    </footer>
</body>