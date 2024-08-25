<?php
namespace src\libs\cep;

use Exception;
use InvalidArgumentException;

class CepServiceHandler
{
    private CepService $cepService;
    public function __construct(CepService $cepService)
    {
        $this->cepService = $cepService;
    }
    public function consultCep(int $cep): CepResponse
    {
        if (!preg_match('/^\d{8}$/', (string) $cep)) {
            throw new InvalidArgumentException("Invalid CEP format.");
        }

        try {
            return $this->cepService->consult($cep);
        } catch (Exception $ex) {
            throw new Exception("Failed to consult CEP: " . $ex->getMessage());
        }
    }
}
