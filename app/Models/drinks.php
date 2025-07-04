<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drinks extends Model
{
    protected $table = 'drinks';
    protected $primaryKey = 'product_id';
    protected $keyType = 'string';

    use HasFactory;
}
