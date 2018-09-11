<?php

$dsn = "mysql:host=localhost;charset=utf8;";
$pdo = new PDO($dsn, 'root', '');
$pdo->query('use burger');

echo '<pre>';

$preparedAdm = $pdo->prepare('select * from `order` ');
$preparedAdm->execute();
$afg = $preparedAdm->fetchAll(PDO::FETCH_ASSOC);

echo "<table cellspacing='0' border='1'>";
foreach ($afg as $item) {
    $adminOrder = '
        <tr>
            <td>'.$item['id'].'</td>
            <td>'.$item['home'].'</td>
            <td>'.$item['street'].'</td>
            <td>'.$item['apartment'].'</td>
            <td>'.$item['floor'].'</td>
            <td>'.$item['housing'].'</td>
            <td>'.$item['comment'].'</td>
        </tr>
    ';

    echo $adminOrder;
}
echo "</table>";
echo '<br /><br />';

$preparedAdmUsers = $pdo->prepare('select * from users ');
$preparedAdmUsers->execute();
$afgUsers = $preparedAdmUsers->fetchAll(PDO::FETCH_ASSOC);

echo "<table cellspacing='0' border='1'>";
foreach ($afgUsers as $item) {
    $adminOrderUsers = '
        <tr>
            <td>'.$item['id'].'</td>
            <td>'.$item['name'].'</td>
            <td>'.$item['phone'].'</td>
            <td>'.$item['email'].'</td>
        </tr>
    ';

    echo $adminOrderUsers;
}
echo "</table>";
