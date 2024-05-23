<?php
//preleviamo i dati dal fine json
$list_string = file_get_contents("dischi.json"); //string

//converto stringa in array 
$list = json_decode($list_string, true);


// var_dump($list);

//risposta
$response_data = [
    "results" => $list,
];

//trasformo dati in stringa json
$json_list = json_encode($response_data);

//inforimiamo browser arrivo dei file json
header("Comtent-type: application/json");

//invio risposta 
echo $json_list;