<?php

use App\Models\Order;
use App\Models\Stok;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_stoks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Stok::class);
            $table->foreignIdFor(Order::class);
            $table->integer('jumlah_pembelian');
            $table->double('harga_barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_stoks');
    }
};
