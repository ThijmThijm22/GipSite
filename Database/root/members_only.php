<?php
session_start();
echo '<h1>Leden pagina</h1>';
if (isset($_SESSION['valid_user'])) //scenario 1: de sessievariabele is ge�nitialiseerd
		{
		echo '<p>Je bent aangemeld als '.$_SESSION['valid_user'].'</p>';
		echo '<p>Inhoud voor aangemelde gebruikers...</p>';
		}
else //scenario 2: de sessievariabele is niet ge�nitialiseerd
		{
		echo '<p>Je bent niet aangemeld.</p>';
		echo '<p>Alleen aangemelde gebruikers mogen deze pagina zien.</p>';
		}
echo '<a href="authmain.php">Terug naar de homepage.</a>';
?>