<?php

namespace App\Models\Checkout;

use App\Support\Scopes\QueryGlobalScopeTrait;
use Illuminate\Database\Eloquent\Model;

class PagseguroTransaction extends Model
{
    use QueryGlobalScopeTrait;
    
    protected $guarded = [
        '_token',
        'created_at',
        'updated_at'
    ];

    public function getCreatedAtFormattedAttribute() //created_at_formatted
    {
        return $this->getAttribute('created_at')->format('d/m/Y, H:i \h\r\s ');
    }

    public function getStatusFormattedAttribute() // status_formatted
    {
        $statusText = '';
        switch ($this->getAttribute('status')) {
            case(1):
                $statusText = '<span class="badge badge-primary">Aguardando pagamento</b>';
                break;
            case(2):
                $statusText = '<span class="badge badge-primary">Em análise</b>';
                break;
            case(3):
                $statusText = '<span class="badge badge-success">Paga</b>';
                break;
            case(4):
                $statusText = '<span class="badge badge-info">Disponível</b>';
                break;
            case(5):
                $statusText = '<span class="badge badge-dark">Em disputa</b>';
                break;
            case(6):
                $statusText = '<span class="badge badge-warning">Devolvida</b>';
                break;
            case(7):
                $statusText = '<span class="badge badge-danger">Cancelada</b>';
                break;
            case(8):
                $statusText = '<span class="badge badge-light">Debitado</b>';
                break;
            case(9):
                $statusText = '<span class="badge badge-dark">Retenção temporária</b>';
                break;
        }
        return $statusText;
    }
}
