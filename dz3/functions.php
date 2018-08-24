<?php
function task1()
{
    $file = file_get_contents("./data.xml");
    $xml = new SimpleXMLElement($file);

    foreach ($xml->Address as $item) {
        echo "<b>" . $item->attributes()->__toString() . '<br />' . "</b>";
        echo "<b>Имя: </b>" . $item->Name . '<br />';
        echo "<b>Улица: </b>" . $item->Street . '<br />';
        echo "<b>Город: </b>" . $item->City . '<br />';
        echo "<b>Штат: </b>" . $item->State . '<br />';
        echo "<b>Индекс: </b>" . $item->Zip . '<br />';
        echo "<b>Страна: </b>" . $item->Country . '<br />';
        echo "<br />";
    }
    echo "<b>Комментарий: </b>" . $xml->DeliveryNotes;

    echo "<br><br>";
    foreach ($xml->Items->Item as $item) {
        echo "<b>" . $item->attributes()->__toString() . '<br />' . "</b>";
        echo "<b>Наименование продукта: </b>" . $item->ProductName . '<br />';
        echo "<b>Количество: </b>" . $item->Quantity . '<br />';
        echo "<b>Цена US: </b>" . $item->USPrice . '<br />';
        if ($item->Comment) {
            echo "<b>Комментарий: </b>" . $item->Comment . '<br />';
        } else {
            echo "<b>Комментарий: </b>" . "-" . '<br />';
        }
        if ($item->ShipDate) {
            echo "<b>Дата отгрузки: </b>" . $item->ShipDate . '<br />';
        } else {
            echo "<b>Дата отгрузки: </b>" . "-" . '<br />';
        }

        echo "<br />";
    }
}

function task2()
{
    $country = [
        $city = [
            "Russia" => "Moscow",
            "USA" => "Washington",
            "France" => "Paris",

        ],
        $city = [
            "Russia" =>"Saint-Petersburg",
            "USA" => "New york",
            "France" => "Marseille",

        ],
        $city = [
            "Russia" =>"Krasnodar",
            "USA" => "Chicago",
            "France" => "Lyon",
        ]
    ];
    $jsonenc = json_encode($country, JSON_UNESCAPED_UNICODE);
    file_put_contents("output.json", $jsonenc);

    $var = file_get_contents("output.json");
//    $jsondec = json_decode($var, true);

//    $flag = rand(true, false);
    if (true) {
        $jsondec = json_decode($var, true);
        $jsondec[0]=["Murmansk", "Omsk", "Ufa"];
        $jsonenc2 = json_encode($jsondec, JSON_UNESCAPED_UNICODE);
        file_put_contents("output2.json", $jsonenc2);
        $var2 = file_get_contents("output2.json");

//        print_r($var2);
    }
    echo "<br />";
//    print_r($jsondec);

    echo "<pre>";
//    print_r(json_decode($var, true));
//    print_r(json_decode($var2, true));
    print_r($var);
    print_r($var2);
}
