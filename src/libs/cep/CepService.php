<?php
namespace src\libs\cep;

class CepService
{
    private Request $request;
    const BASE_URL = "https://cep.awesomeapi.com.br/json/";
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function consult(int $cep): CepResponse
    {
        $url = self::BASE_URL . $cep;
        $response = $this->request->get($url);
        return new CepResponse($response);
    }
}
