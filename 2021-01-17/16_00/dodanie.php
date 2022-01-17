<?php
$number = $_POST['number'];
$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$name3 = $_POST['name3'];

$con = mysqli_connect("localhost", "root", "", "ee09");
$zap = "INSERT INTO ratownicy (`nrKaretki`,`ratownik1`,`ratownik2`,`ratownik3`) values ('$number', '$name1', '$name2','$name3');";
$query = mysqli_query($con, $zap);

echo "Do bazy zostało wysłane zapytanie: ".$zap;
mysqli_close($con);
?>
