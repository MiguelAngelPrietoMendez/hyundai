<?php

$mysqli = new mysqli("hyundaiCMS.db.10637500.hostedresource.com", "hyundaiCMS", "H1und@i2015", "hyundaiCMS");
if ($mysqli->connect_errno) 
{
echo "Falló la conexión con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
