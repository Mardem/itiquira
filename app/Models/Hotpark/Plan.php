<?php

namespace App\Models\Hotpark;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
