<?php

namespace App\Controllers;

class Home extends BaseController
{
    /**
     * Renderiza a view para consultar os dados de clima e geolocalização
     *
     * @return view
     */
    public function index()
    {
        return view('welcome_message');
    }

    /**
     * Processa a requisição advinda da view 'welcome_message'
     *
     * @throws Exception
     * @return mixed
     */
    public function weather()
    {

        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        /** @var string latitude enviada no request */
        $latitude = $this->request->getGet('latitude');

        /** @var string longitude enviada no request */
        $longitude = $this->request->getGet('longitude');

        print_r($this->request->getGet());
        exit;
    }
}
