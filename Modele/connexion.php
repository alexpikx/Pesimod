<?php
$dbname = "Pesimod";
$host='localhost';
$user='root';
$pass='root';

$db = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$pass");
$db->query("SET NAMES UTF8");

?>