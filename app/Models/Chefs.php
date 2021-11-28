<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chefs extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'speciality', 'image', 'link1', 'link2', 'link3'];
}
