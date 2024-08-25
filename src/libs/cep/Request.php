<?php
namespace src\libs\cep;

use Exception;

class Request implements RequestInterface
{
    public function get(string $url): array
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($curl);
        curl_close($curl);
        if (curl_errno($curl)) {
            return throw new Exception('Invalid request');
        }

        $resp = json_decode($response, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception('Json decode error');
        }

        return $resp;
    }
}
