<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    public function product()
    {
        return $this->hasMany(Products::class);
    }
}
