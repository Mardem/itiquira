<?php

if (!function_exists('calculateChildrenAdult')) {


    /**
     * Função responsável por calcular o valor total de crianças
     */
    function calculateChildrenAdult($qtd, $val)
    {
        return $qtd * $val;
    }
}
