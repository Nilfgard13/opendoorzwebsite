<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nomors extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'nomor', 'created_at', 'updated_at'];

}
