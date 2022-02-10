<?php

namespace App\Models;

use App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $keyType = 'string';


    public function order()
    {
        return $this->belongsTo('App\Models\Customer');
    }
}
