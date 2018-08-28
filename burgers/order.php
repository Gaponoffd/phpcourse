<?php
$mysqli = new mysqli("localhost", "root", "", "burger");
if (mysqli_connect_errno()) {
    printf("Ошибка соединения:%s\n", mysqli_connect_error());
    exit();
}

$email = $_REQUEST["email"];
$name = $_REQUEST["name"];
$phone = $_REQUEST["phone"];
$street = $_REQUEST["street"];
$home = $_REQUEST["home"];
$housing = $_REQUEST["housing"];
$apartment = $_REQUEST["apartment"];
$floor = $_REQUEST["floor"];
$comment = $_REQUEST["comment"];

$sql = "INSERT INTO users (email, name, phone) VALUES ('$email', '$name','$phone')";
$result = $mysqli->query($sql);

$sql2 = "INSERT INTO order (street, home, housing, apartment, floor, comment) 
VALUES ('$street', '$home', '$housing', '$apartment', '$floor', '$comment')";
$result2 = $mysqli->query($sql2);
echo "Привет";
