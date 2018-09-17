
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
    <div>
        <h4>Километры</h4>
        <input type="text" value="0" name="kilometers">
    </div>
    <div>
        <h4>Часы</h4>
        <input type="text" value="0" name="hour">
        <h4>Минуты</h4>
        <input type="text" value="0" name="minutes">
    </div>
    <div>
        <h2>Возраст водителя, лет</h2>
        <input type="text" value="18" name="age">
    </div>
    <div>
        <h2>Дополнительные услуги</h2>
        <div>GPS</div>
        <input type="checkbox" name="gps">
        <div>Дополнительный водитель, 100 руб</div>
        <input type="checkbox" name="driver">
    </div>
    <button>Отправить</button>
</form>

</body>
</html>




