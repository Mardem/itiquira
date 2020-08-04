<?php

if (!function_exists('generateSessionPagSeguro')) {
    function generateSessionPagSeguro()
    {
        $client = new \GuzzleHttp\Client();
        $response  =$client->request('blog', 'https://ws.sandbox.pagseguro.uol.com.br/v2/sessions', [
            'form_params' => [
                'token' => config('pagseguro.sandbox.token'),
                'email' => config('pagseguro.sandbox.email')
            ]
        ]);
        $xml = simplexml_load_string($response->getBody());
        return $xml;
    }
}
