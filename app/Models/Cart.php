<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded =[];

    function users()  {
        return $this->belongsTo(User::class)->withDefault();
    }
    function products()  {
        return $this->belongsTo(Product::class)->withDefault();
    }
}
