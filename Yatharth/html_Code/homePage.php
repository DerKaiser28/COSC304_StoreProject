<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, /* add Databse */);
$sql = "/*Add query*/ ";
$featured = $con->query($sql);
?>


<!DOCTYPE html>

<html>

<head>
<title>Game Nation</title>
    <?php include 'db.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
   <script type="text/javascript" src="script.js"></script>
   <link rel="stylesheet" type="text/css" href="style.css">
   <script>
    $(function(){
        $("#header").load("header.html"); 
        $("#footer").load("footer.html"); 
    });
</script>

</head>

<body>
<div id="header"></div>

<nav class="navbar bg-light">
  <div class="container-fluid">    
    <a class="navbar-brand">Search Games Nation</a>
    <form class="d-flex" role="search">
        <button class="btn btn-outline-success me-2" type="button">All Games</button>
        <input type="text" id = "search" placeholder= "Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>  
  </div>
</nav>

  <div class="col-md-2"></div>

  <div class="col-md-8">
    <div class="row">
        <h2 class="text-center"> Check These Games! </h2> <br> <br> 
        <?php
            while($product = mysql_fetch_assoc($featured)):


        ?>
        <div class="col-md-5">
            <h4><?= $product['title'];?></h4>
            <img src ="<?= $product['image'];?>" alt="<?= $product['title']; ?>"/> 
            <p class = "lprice"> Price of Game : $ <?= $product["price"];?></p>
            <a href="gameDetails.php">
                <button type="button" class="btn btn bg-success" data-toggle="model" data-target="#details">More Info</button>
            </a>
        </div>
        <?php endwhile; ?>
  </div>
</div>
    <div id = "display"></div>
    <div id="footer"></div>
</body>

</html>