<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Log in</title>
  <link rel="stylesheet" href="styleLog-in.css" />
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
  <form method = 'Post' action = ''>
    Volledige naam:<br><input type = 'text' name = 'name'><br>
    Telefoonnummer:<br><input type = 'text' name = 'phone_Number'><br>
    Straat:<br><input type = 'text' name = 'street'><br>
    Postcode:<br><input type = 'text' name = 'postal_Code'><br>
    Stad:<br><input type = 'text' name = 'city'><br>
    Password:<br><input type = 'text' name = 'Wachtwoord'><br>
    <input type = 'submit' name = 'Submit'><br>
  </form>
  <?php
  if(isset($_POST['Submit']))
  {
    $Name = $_POST['name'];
    $Phone_Number = $_POST['phone_Number'];
    $Street = $_POST['street'];
    $Postal_Code = $_POST['postal_Code'];
    $City = $_POST['city'];
    $Pass = $_POST['Wachtwoord'];

    include('connect.php');
    $query = "Insert into customers (name, phone_Number, street, postal_Code, city, Wachtwoord) values ('$Name','$Phone_Number','$Street','$Postal_Code','$City', '$Pass')";
    $res = mysqli_query($cn, $query) or die ('Uitvoeren query mislikt');
    echo "Toevoegen geluhkt";
    mysqli_close($cn);
  }
?>
</body>
</html>
 