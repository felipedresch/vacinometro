<?php
define("HOST","localhost");
define("USUARIO","root");
define("SENHA","");
define("BANCO","vacinacao");

$conn = mysqli_connect("localhost", "root", "", "vacinacao");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
