<?php

$dsn = "mysql:host=localhost;charset=utf8;";
$pdo = new PDO($dsn, 'root', '');
$pdo->query('use burger');
require_once "./order-function.php";

echo '<pre>';

$isRegistered = alreadyRegistered($_POST['email'], $pdo);

if (!$isRegistered) {
    $isRegistered = registerUser($_POST['name'], $_POST['email'], $_POST['phone'], $pdo);
}

$data = registerOrder(
    $_POST['street'],
    $_POST['home'],
    $_POST['part'],
    $_POST['appt'],
    $_POST['floor'],
    $_POST['comment'],
    $isRegistered['id'],
    $pdo
);

$cae = $pdo->prepare('select * from `order` where id_users = :id_user');
$cae->execute(['id_user' => $data['id_users']]);
$der = $cae->fetchAll(PDO::FETCH_ASSOC);

$mail_message = '
    <html>
        <head>
            <title>Заявка</title>
        </head>
        <body>
            <h2>Заказ № '.$data['id'].'</h2>
            <h3>Ваш заказ будет доставлен по адресу:</h3>
            <ul>
                <li>Дом:' . $data['home'] . '</li>
                <li>Корпус: ' . $data['housing'] . '</li>
                <li>Квартира: ' . $data['apartment'] . '</li>
                <li>Этаж: ' . $data['floor'] . '</li>
                <li>Содержимое заказа: DarkBeefBurger за 500 рублей, 1 шт</li>
            </ul>
            <p>Это ваш '.count($der). ' заказ</p>
        </body>
    </html>';


//$da = json_encode($data);
file_put_contents('mail.html', $mail_message);

echo ('Ваш заказ принят');
