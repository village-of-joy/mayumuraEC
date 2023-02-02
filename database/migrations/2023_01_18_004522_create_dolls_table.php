<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dolls', function (Blueprint $table) {
            $table->id();
            $table->string('category', 20);
            $table->string('name', 20);
            $table->timestamps();
            $table->foreignId('goods_id')->constrained('goods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dolls');
    }
};
