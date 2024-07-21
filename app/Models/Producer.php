<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'producer';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre'
    ];

}
