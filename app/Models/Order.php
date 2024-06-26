<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    // 1 Order Bisa Memiliki Banyak Stok
    public function stok():BelongsToMany
    {
        return $this->belongsToMany(Stok::class);
    }
    // 1 Order Hanya Terkait dengan 1 Customer
    public function customer():BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

}
