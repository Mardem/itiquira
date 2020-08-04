<?php

namespace App\Models\Agendament;

use App\Models\Image\ImageAgendament;
use Illuminate\Database\Eloquent\Model;

class Chalet extends Model
{
    protected $guarded = [
        '_token',
        'created_at',
        'updated_at'
    ];

    /**
     * Relacionamento de chalé para imagens = Um para muitos
     */
    public function images()
    {
        return $this->hasMany(ImageAgendament::class);
    }
}
