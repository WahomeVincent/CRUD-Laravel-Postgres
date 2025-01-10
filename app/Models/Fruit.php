<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    use HasFactory;

    // Add the fields that are allowed to be mass-assigned
    protected $fillable = ['name', 'price', 'created_at', 'updated_at'];
}
