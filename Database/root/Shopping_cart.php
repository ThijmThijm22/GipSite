<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="default.css" />
    <link rel="stylesheet" href="style2.css" />
    <title>Chez nous</title>
  </head>
  <body>
    <nav>
        <a href="index.html">Chez Nous</a>
        <div class="navLinks">
          <a href="GipSite/index.html">Home</a>
          <a href="">Products</a>
          <a href="">Soon</a>
        </div>
      </nav>
      <?php
      $connect = mysqli_connect('127.0.0.1', 'root', 'usbw') or die('Connectie met de server mislukt');

      ?>
              <?php
                $query = "SELECT * FROM tbl_products ORDER BY id ASC";
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)
                {
                  while($row = mysqli_fetch_array($result))
                  {

                  }
                }
              ?>
      <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
      <h4 class="text-info"><?php echo $row["name"]; ?></h4>
      <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
      <input type="text" name = "quantity" class="form-control" value = "1"/>
      <input type = "hidden" name="hidden_name" value="<?php echo $row["name"]; ?>"/>
      <input type = "hidden" name="hidden_price" value="<?php echo $row["price"]; ?>"/>
      <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-succes" value="Add to Cart" />

    </section>
      </div>
    
    
  </body>
</html>
