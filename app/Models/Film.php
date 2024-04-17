<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Film extends Model
{
    use HasFactory;
    protected $table='films';

    // 1 Film Bisa Memiliki Banyak Genre
    public function genre(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }

    // 1 Film Bisa Memiliki Banyak Stok
    public function stok():HasMany
    {
        return $this->hasMany(Stok::class);
    }
    public function getImage(){
        if(!empty($this->photo)){
            $basePath = public_path('/photos');
            $imageUrl = asset(str_replace('\\','/', $basePath . '/' . $this->photo));
            return $imageUrl;
        }
    }
    
}
