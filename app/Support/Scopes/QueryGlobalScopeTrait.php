<?php


namespace App\Support\Scopes;


trait QueryGlobalScopeTrait
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new QueryGlobalScope());
    }

}
