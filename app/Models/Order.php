<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded =[];

    function users()  {
        return $this->belongsTo(User::class)->withDefault();
    }
    function orderDetail()  {
        return $this->hasMany(OrderDetail::class);
    }
    function payments(){
        return $this->hasOne(Payment::class );
    }
}
