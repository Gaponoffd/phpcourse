<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Выберите тариф</h1>
<form action="app/init.php" method="post">
    <select name="tariff" id="tariff">
        <option value="base" >Базовый</option>
        <option value="hourly">Почасовой</option>
        <option value="dayli">Суточный</option>
        <option value="student">Студенческий</option>
    </select>
    <span>Километры</span>
    <input type="text" value="1" name="kilometers">
    <span>Минуты</span>
    <input type="text" value="1" name="minutes">
    <h2>Возраст водителя, лет</h2>
    <input type="text" name="age">
    <button>Отправить</button>
</form>
</body>
</html>