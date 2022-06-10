
<html>
<body>
<h1>Afmelden</h1>
<?php
session_start(); // er wordt met sessies gewerkt, de sessievariabelen zijn beschikbaar
if(isset($_SESSION['valid_user']))
	{	
	unset($_SESSION['valid_user']);
	session_destroy() or die('De sessie kon niet vernietigd worden'); // de sessie wordt vernietigd. Als dit niet zou lukken wordt de die-boodschap gegeven en wordt het script afgebroken.
	echo 'Afgemeld.'; // deze boodschap wordt enkel gegeven als de die-messages bij de vorige twee instructies niet geactiveerd werden, m.a.w. als het afmelden gelukt is.
	}
?>
<a href="authmain.php">Back to main page</a>
</body>
</html>