<?php
require_once("../../resources/config.php");

$Name = $_POST["arg1"];

$link = mysqli_connect($hostname,$username,$password,$database,3306);

$query = "INSERT INTO leaguename(ProposedName) VALUES ('$Name')";

$result = mysqli_query($link, $query) or die(Mysqli_error($link));
?>
