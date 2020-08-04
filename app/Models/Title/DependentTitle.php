<?php

namespace App\Models\Title;

use App\Support\Scopes\QueryGlobalScopeTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class DependentTitle extends Model
{
    use QueryGlobalScopeTrait;
    protected $guarded = ['_token', 'created_at', 'updated_at'];

    /**
     * Realiza a encriptação do CPF do cliente
     * @param $value
     */
    public function setCpfAttribute($value)
    {
        $this->attributes['cpf'] = Crypt::encrypt($value);
    }

    /*
    |--------------------------------------------------------------------------
    | Accessors
    |--------------------------------------------------------------------------


    /**
     * Realiza a desencriptação do CPF = cpf_decrypted
     * @return string
     */
    public function getCpfDecryptedAttribute()
    {
        $cpf = Crypt::decrypt($this->getAttribute('cpf'));
        return $cpf;
    }
    /**
     * Tras a data formatada = created_at_formatted
     * @return mixed
     */
    public function getCreatedAtFormattedAttribute()
    {
        return $this->getAttribute('created_at')->format('d/m/Y, H:i \h');
    }

}
