<?php

namespace App\Libraries;

class Weather
{

    /**
     *  URL base da API
     * @link https://openweathermap.org/api/one-call-api
     */
    private const BASE_URL = 'https://api.openweathermap.org/data/2.5/onecall';

    /** @var string chave de acesso ao openweathermap api */
    private string $apiKey;

    public function __construct()
    {
        // definimos o valor da chave de acesso
        $this->apiKey = env('WEATHER_API_KEY');

        // helper para montarmos a tag img do ícone
        helper('html');
    }
}
