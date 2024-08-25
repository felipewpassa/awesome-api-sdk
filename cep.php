<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://cep.awesomeapi.com.br/json/60130240');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$resp = json_decode(curl_exec($curl), true);
curl_close($curl);
var_dump($resp);