<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;
    protected $table ='customers';

    // 1 Customer Bisa Memilik Banyak Order
    public function order() :HasMany
    {
        return $this->hasMany(Order::class);
    }
}
