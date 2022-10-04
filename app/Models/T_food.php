<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_food extends Model
{
    use HasFactory;
    protected $table='t_food';
    protected $fillable =['description','name','unit_price','promotion_price','produced_on','image'];
}
