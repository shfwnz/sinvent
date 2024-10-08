<?php

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
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brands',30)->nullable();
            $table->string('series',40)->nullable();
            $table->text('spesification')->nullable();
            $table->smallInteger('stock')->default(0);
            // $table->foreignId('category_id')->nullable();
            // $table->foreign('category_id')->references('id')->on('category')
            //       ->onUpdate('cascade')
            //       ->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
