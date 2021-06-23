<?php

namespace App\Models\Models\Tmzs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tmzs extends Model
{
    //use HasFactory;
    protected $fillable = ['name', 'address', 'quantity', 'price'];

}
