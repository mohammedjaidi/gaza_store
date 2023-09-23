<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded =[];

    function users()  {
        return $this->belongsTo(User::class)->withDefault();
    }
    function orders()  {
        return $this->belongsTo(Order::class)->withDefault();
    }
}
