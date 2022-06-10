<?php
session_start(); //vanaf nu werken we met sessies en eventuele sessievariabelen worden geladen
if (isset($_POST['naam']) && isset($_POST['Wachtwoord'])) //voldaan als de gebruiker net heeft proberen in te loggen
		{
		$userid = $_POST['naam'];
		$password = $_POST['Wachtwoord'];
		$db_conn = mysqli_connect('localhost', 'root', 'usbw');
		mysqli_select_db($db_conn,'auth');
		$query = 'select * from auth '."where name='$userid' "." and pass='$password'";
		$result = mysqli_query($db_conn, $query);
		if (mysqli_num_rows($result) >0 ) //de gebruiker werd gevonden in de database
				{
				$_SESSION['valid_user'] = $userid;
				}
		}
?>
<html>
<body>
<h1>Home page</h1>
<?php
if (isset($_SESSION['valid_user'])) // scenario 1: er is geldig aangemeld
		{
		echo 'Je bent aangemeld als: '.$_SESSION["valid_user"].' <br /><a href="logout.php">Afmelden</a><br />';
		}
else
		{
		if (isset($userid)) //scenario 2: iemand heeft geprobeerd aan te melden maar dit is mislukt
				{
				echo 'Aanmelden mislukt';
				}
		else //scenario 3: er is nog niet geprobeerd om aan te melden of er is afgemeld
				{
				echo 'Je bent niet aangemeld.<br />';
				}
		// toon het inlogformulier (wordt getoond bij een niet-gelukte login of indien er nog niet geprobeerd is om aan te melden)
		echo '<form method="post" action="authmain.php">';
		echo '<table>';
		echo '<tr><td>Userid:</td>';
		echo '<td><input type="text" name="userid"></td></tr>';
		echo '<tr><td>Password:</td>';
		echo '<td><input type="password" name="password"></td></tr>';
		echo '<tr><td colspan="2" align="center">';
		echo '<input type="submit" value="Log in"></td></tr>';
		echo '</table></form>';
		}
?>
<br>
<a href="members_only.php">Voor leden</a>
</body>
</html>
