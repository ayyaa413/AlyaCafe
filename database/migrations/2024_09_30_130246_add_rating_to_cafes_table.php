<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('cafes', function (Blueprint $table) {
            $table->decimal('rating', 2, 1)->nullable(); // Contoh: rating dengan dua digit sebelum desimal dan satu digit setelah desimal
        });
    }
    
    public function down()
    {
        Schema::table('cafes', function (Blueprint $table) {
            $table->dropColumn('rating');
        });
    }
};
