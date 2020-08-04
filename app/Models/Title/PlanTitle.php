<?php

namespace App\Models\Title;

use App\Support\Scopes\QueryGlobalScopeTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class PlanTitle extends Model
{
    use QueryGlobalScopeTrait;
    protected $guarded = [
        '_token', 'created_at', 'updated_at'
    ];

    protected $appends = [
        'cpf_decrypted'
    ];

    /*
    |--------------------------------------------------------------------------
    | Mutators
    |--------------------------------------------------------------------------
    */
    /**
     * Realiza a encriptação do CPF do cliente
     * @param $value
     */
    public function setCpfAttribute($value)
    {
        $this->attributes['cpf'] = Crypt::encrypt($value);
    }

    /**
     * Realiza a encriptação do RG do cliente
     * @param $value
     */
    public function setRgAttribute($value)
    {
        $this->attributes['rg'] = Crypt::encrypt($value);
    }

    /*
    |--------------------------------------------------------------------------
    | Accessors
    |--------------------------------------------------------------------------

    */
    /**
     * Realiza a desencriptação do CPF = cpf_decrypted
     * @return string
     */
    public function getCpfDecryptedAttribute(): string
    {
        try {
            $cpf = Crypt::decrypt($this->getAttribute('cpf'));
        } catch (\Exception $exception) {
            $cpf = $this->getAttribute('cpf');
            \Log::error($exception->getMessage());
        }
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

    /*
    |--------------------------------------------------------------------------
    | Relacionamentos
    |--------------------------------------------------------------------------
    */
    public function dependents()
    {
        return $this->hasMany(DependentTitle::class, 'plan_titles_id');
    }
}
