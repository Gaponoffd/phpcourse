<?php

function alreadyRegistered($email, Pdo $pdo)
{
    $prepared = $pdo->prepare('select * from users where email = :email');
    $prepared->execute(['email' => trim($email)]);
    return $prepared->fetch(PDO::FETCH_ASSOC);
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

function registerOrder($street, $home, $housing, $apartment, $floor, $comment, $id_users, Pdo $pdo)
{
    $prepared = $pdo->prepare('INSERT INTO `order` (street, home, housing, apartment, floor, comment, id_users)
    VALUES (:street, :home, :housing, :apartment, :floor, :comments, :id_users)');
    $prepared->execute([
        'street' => $street,
        'home' => $home,
        'housing' => $housing,
        'apartment' => $apartment,
        'floor' => $floor,
        'comments' => $comment,
        'id_users' => $id_users
    ]);
    $id = $pdo->lastInsertId();
    $prepared = $pdo->prepare('select * from `order` where id = :id');
    $prepared->execute(['id' => $id]);
    return $prepared->fetch(PDO::FETCH_ASSOC);
}
