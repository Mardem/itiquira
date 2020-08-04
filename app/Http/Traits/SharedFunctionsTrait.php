<?php

namespace App\Http\Traits;


trait SharedFunctionsTrait
{

    /*
     * Função responsável de verificar o status e retornar em um campo mágico chamado
     * 'status_formated'
     * */
    public function getStatusFormatedAttribute()
    {
        if($this->attributes['status'] == self::STATUS['ATIVO'])
            $status = "<b class='text-success'>Ativo</b>";
        elseif($this->attributes['status'] == self::STATUS['INATIVO'])
            $status = "<b class='text-danger'>Inativo</b>";

        return $status;
    }
}