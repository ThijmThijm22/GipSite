<?php
$cn = mysqli_connect('127.0.0.1', 'root', 'usbw') or die('Connectie met de server mislukt');
mysqli_select_db($cn, 'menu') or die('Selectie database mislukt');
?>