<?php
echo '<pre>';
//print_r($_POST);
$dsn = "mysql:host=localhost;charset=utf8;";
$pdo = new PDO($dsn, 'root', '');
$pdo->query('use burger');
//$prepare = $pdo -> prepare('SELECT * FROM users WHERE email = :email');
//$prepare->execute(['email'=>$_POST['email']]);
//$result = $prepare->fetchAll(PDO::FETCH_ASSOC);
//
//var_dump($result);


function alreadyRegistered($email, $pdo)
{
    // asd@asd.ru
    $prepared = $pdo->prepare('select * from users where email = :email');
    $prepared->execute(['email' => trim($email)]);
    return $prepared->fetch(PDO::FETCH_ASSOC);
}

$isRegistered = alreadyRegistered($_POST['email'], $pdo);


if (!$isRegistered) {
    $isRegistered = registerUser($_POST['name'], $_POST['email'], $_POST['phone'], $pdo);
} else {
//    echo 'ddddddd';
}

function registerUser($name, $email, $phone, Pdo $pdo)
{
    $prepared = $pdo->prepare('INSERT INTO users (name, email, phone) VALUES (:name, :email, :phone)');
    $prepared->execute(['email' => trim($email), 'name' => $name, 'phone' => $phone]);
    $id = $pdo->lastInsertId();
    $prepared = $pdo->prepare('select * from users where id = :id');
    $prepared->execute(['id' => $id]);
    return $prepared->fetch(PDO::FETCH_ASSOC);
}

function registerOrder($street, $home, $housing, $apartment, $floor, $comment, $id_users, $pdo)
{
    $prepared = $pdo->prepare('INSERT INTO `order` (street, home, housing, apartment, floor, comment, id_users)
 VALUES (:street, :home, :housing, :apartment, :floor, :comment, :id_users)');
    $prepared->execute(['street' => $street, 'home' => $home, 'housing' => $housing, 'apartment' => $apartment, 'floor' => $floor, 'comment' => $comment, 'id_users' => $id_users]);
    $id = $pdo->lastInsertId();
    $prepared = $pdo->prepare('select * from order where id = :id');
    $prepared->execute(['id' => $id]);
    return $prepared->fetch(PDO::FETCH_ASSOC);
}

$data = registerOrder($_POST['street'], $_POST['home'], $_POST['part'], $_POST['appt'], $_POST['floor'], $_POST['comment'],$isRegistered['id'], $pdo);
//print_r($isRegistered);
$da = json_encode($data);
print_r($data);
file_put_contents('admin.html', 'zakaz '.$data['id']);
