<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\CekIn;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('CekIn', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tamu');
            $table->date('tgl_Cekin');
            $table->date('tgl_Cekout');
            $table->string('tipe');
            $table->integer('jmlh_Kamar');
            $table->timestamp('tggl_pemesanan')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('CekIn');
    }
};
