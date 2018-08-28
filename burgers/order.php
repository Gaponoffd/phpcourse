<?php
$mysqli = new mysqli("localhost", "root", "", "burger");
if (mysqli_connect_errno()) {
    printf("Ошибка соединения:%s\n", mysqli_connect_error());
    exit();
}

//$email = $_REQUEST["email"];
//$name = $_REQUEST["name"];
//$phone = $_REQUEST["phone"];
//$street = $_REQUEST["street"];
//$home = $_REQUEST["home"];
//$housing = $_REQUEST["housing"];
//$apartment = $_REQUEST["apartment"];
//$floor = $_REQUEST["floor"];
//$comment = $_REQUEST["comment"];
$email = 'уцуцa';
$name = 'дима';
$phone = '8888';


echo "<pre>";

$been = "SELECT email FROM `users`";
$been = "SELECT email FROM `users`";
$beenSqli = $mysqli->query($been);
$beenFetch = $beenSqli -> fetch_all();

//$numberOrders=1;
if($beenFetch==array()) {
    $sql = "INSERT INTO `users` (email, name, phone, number_orders) VALUES ('$email', '$name','$phone', '1')";
    $result = $mysqli->query($sql);
//    $numberOrders = 1;
} else {
    $numberOrders += $numberOrders;
    foreach ($beenFetch as $item) {
        if ($item[0] == $email) {
            $sqlNub = "UPDATE users SET number_orders = '$item[4]+1'";
            $result = $mysqli->query($sqlNub);
        }
        print_r($beenFetch);
    }
}
//echo $numberOrders;

//$sql2 = "INSERT INTO `order` (street, home, housing, apartment, floor, comment)
//VALUES ('$street', '$home', '$housing', '$apartment', '$floor', '$comment')";
//$result2 = $mysqli->query($sql2);

//print_r($been3);
