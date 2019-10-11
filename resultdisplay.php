<!DOCTYPE html>
<html>
<head>
    <title>displayForm</title>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>
<?php include 'header.php'?>
<ul>
  <li><a class="active" href="main.html">Back to main</a></li>
  <li><a href="Pricelow">Price:low to high</a></li>
  <li><a href="Pricehigh">Price:high to low</a></li>
  <li><a href="Newest">Newest Arrival</a></li>
</ul>
<p>there is no product</p>
<?php include 'footer.php'?>
</body>
</html>