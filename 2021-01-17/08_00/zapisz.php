<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$address = $_POST['address'];

$con = mysqli_connect("localhost", "root", "", "wedkowanie");
$zap = "INSERT INTO karty_wedkarskie (`imie`,`nazwisko`,`adres`) values ('$name', '$surname','$address');";
$query = mysqli_query($con, $zap);

mysqli_close($con);
