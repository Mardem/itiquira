<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Credenciais de acesso do PagSeguro - Produção e Sandbox
    |--------------------------------------------------------------------------
    |
    */

    'sandbox' => [
        'email' => 'contato@itiquira.com.br',
        'token' => 'CF6632AD357F40C59BEF59F9D14BA8F9',
        'receiverEmail' => 'contato@itiquira.com.br',
    ],
    'production' => [
        'token' => 'CF6632AD357F40C59BEF59F9D14BA8F9',
        'email' => 'contato@itiquira.com.br',
        'receiverEmail' => 'contato@itiquira.com.br',
    ],
    'globalConfig' => [
        'currency' => 'BRL',
        'notificationURL' => 'https://vendas.itiquira.com.br/checkout-notifications'
    ]
];
