<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, /* add Databse */);
$sql = "/*Add query*/ ";
$featured = $con->query($sql);
?>

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
            <p class = "price"> Price of Game : $ <?= $product["price"];?></p>
            <p class = "description"> Description of game : $ <?= $product["description"];?></p>
            <p class = "rating"> rating of the Game : $ <?= $product["rating"];?></p>
            <-- add code if needed -->
            
        </div>
        <a href="homePage.php">Back Home</a>
        <?php endwhile; ?>
  </div>
</div>