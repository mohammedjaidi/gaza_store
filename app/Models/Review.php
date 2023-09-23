<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded =[];

    function products()  {
        return $this->belongsTo(Product::class)-withDefault();
    }

    function users()  {
        return $this->belongsTo(User::class)->withDefault();
    }
}
