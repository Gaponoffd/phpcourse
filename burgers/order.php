<?php
$mysqli = new mysqli("localhost", "root", "", "burger");
if (mysqli_connect_errno()) {
    printf("Ошибка соединения:%s\n", mysqli_connect_error());
    exit();
}
$email = $_POST["email"];
$name = $_POST["name"];
$phone = $_POST["phone"];

$sql = "INSERT INTO users (email, name, phone) VALUES ('$email', '$name', '$phone')";
$result = $mysqli->query($sql);
echo "Привет";
