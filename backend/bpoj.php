<?php

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://api.hackerearth.com/v3/code/run/',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => array(
        'client_secret'=> '50ca394f69a801f751edf195f07eb3ac49748a4d',
        'async'=> 0,
        'source' => $_POST["code"],
        'lang'=> $_POST["lang"],
        'time_limit'=>5,
        'input'=> $_POST["input"],
        'memory_limit'=>262144
    )
));
$resp = curl_exec($curl);
$decoded_resp = json_decode($resp,true);
$run_status = $decoded_resp['run_status'];
curl_close($curl);

// echo $decoded_resp;
// print_r($decoded_resp);

echo "output :<br>".$run_status["output_html"]."<br><br> compile_status : ".$decoded_resp["compile_status"]."<br> memory_used : ".$run_status["memory_used"]."<br> time_used : ".$run_status["time_used"];


?>