<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $timestamps = true;

    protected $fillable = ['name', 'description', 'price', 'image'];
}
