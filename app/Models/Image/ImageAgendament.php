<?php

namespace App\Models\Image;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class ImageAgendament extends Model
{
    protected $fillable = [
        'chalet_id',
        'thumb_path'
    ];


    /**
     * Acessor responsável por formatar a data para o padrão Brasileiro
     * created_at_formatted
     */
    public function getCreatedAtFormattedAttribute()
    {
        return $this->getAttribute('created_at')->format('d/m/Y, H:i \h\r\s ');
    }

}
