<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Stok extends Model
{
    use HasFactory;
    protected $table = 'stoks';
    // Satu Stok Hanya Terkait Dengan 1 Film
    public function film() :BelongsTo
    {
        return $this->belongsTo(Film::class);
    }

    // Satu Stok Bisa Memiliki Banyak Order
    public function order():BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }
}
