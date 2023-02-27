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

    /**
     * Construindo a classe
     */
    public function __construct()
    {
        // definimos o valor da chave de acesso
        $this->apiKey = env('WEATHER_API_KEY');

        // helper para montarmos a tag img do ícone
        helper('html');
    }


    /**
     * Realiza a chamada à API Openweathermap
     *
     * @param string $latitude do ponto geográfico
     * @param string $longitude do ponto geográfico
     * @return string|array
     */
    public function get(string $latitude, string $longitude): string|array
    {
        try {

            // parâmtros da URL
            $params['lat'] = $latitude;
            $params['lon'] = $longitude;
            $params['units'] = 'metric'; // Para temperatura em Celsius e velocidade do vento em metro/segundo, useunits=metric
            $params['lang'] = 'pt_br';
            $params['appid'] = $this->apiKey;

            // Montamos o endponit a ser requisitado

            /**@var string endPoint que será requisitado */
            $endPoint = self::BASE_URL . '?' . http_build_query($params);

            dd($endPoint);
        } catch (\Throwable $th) {

            echo '<pre>';
            print_r($th);
            exit;

            // ATENÇÃO: o adequado é exibir uma mensagem genérica de erro
        }
    }
}
