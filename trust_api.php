<?php

include "config.php";

//----encryption365 api----
//获取id&token

$zhh = array("username"=>"555om","password"=>"55","servername"=>"cs1");
$json_zhh = json_encode($zhh);
function get_token(){
    global $zhh;
    $data = array("name" => "Hagrid", "age" => "36");

    $data_string = json_encode($zhh);



    $ch = curl_init('https://encryption365.trustocean.com/client/create');

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(

            'Content-Type: application/json',

            'Content-Length: ' . strlen($data_string))

    );



    $result = curl_exec($ch);
    print_r($result);

}


?>
