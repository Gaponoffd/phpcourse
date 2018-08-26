<?php
function task1()
{
    $file = file_get_contents("./data.xml");
    $xml = new SimpleXMLElement($file);

    echo "<b>Номер заказа: </b>" . $xml->attributes()->PurchaseOrderNumber. " " .
    "<b>Дата: </b>" . $xml->attributes()->OrderDate . '<br />';
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

    $flag = rand(true, false);
    if ($flag) {
        $jsondec = json_decode($var, true);
        $jsondec[0]=["Murmansk", "Omsk", "Ufa"];
        $jsonenc2 = json_encode($jsondec, JSON_UNESCAPED_UNICODE);
        file_put_contents("output2.json", $jsonenc2);
        $var2 = file_get_contents("output2.json");
    } else {
        $jsondec = json_decode($var, true);
        $jsonenc2 = json_encode($jsondec, JSON_UNESCAPED_UNICODE);
        file_put_contents("output2.json", $jsonenc2);
        $var2 = file_get_contents("output2.json");
    }
    echo "<br />";
    echo "<pre>";
    $arr1 = json_decode($var, true);
    $arr2 = json_decode($var2, true);

    $result = array_diff($arr2[0], $arr1[0]);
    print_r($result);
}
function task3()
{
    $arr = [];
    for ($i=1; $i<=50; $i++) {
        $number = rand(1, 100);
        array_push($arr, $number);
    }

    $file = fopen('./test.csv', 'w');
    fputcsv($file, $arr, ';');
    fclose($file);

    $csvFile = fopen('./test.csv', 'r');
    $csvData = fgetcsv($csvFile, '200', ';');
    $sum = 0;
    foreach ($csvData as $item) {
        if ($item % 2 == 0) {
            $sum += $item;
        }
    }
    echo $sum;
}
function task4()
{
    $address = "https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json";
    $jsonStr = file_get_contents($address);
    $jsonDec = json_decode($jsonStr, true);
    echo "<pre>";
//    print_r ($jsonDec);
    echo $jsonDec['query']['pages'][15580374]['title'] . "<br />";
    echo $jsonDec['query']['pages'][15580374]['pageid'];
}
