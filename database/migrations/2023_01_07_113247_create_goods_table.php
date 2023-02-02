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
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->string('basis_category', 10);
            $table->string('basis_name', 10);
            $table->string('basis_option', 10)->nullable();
            $table->string('doll_category1', 10);
            $table->string('doll_name1', 20);
            $table->string('doll_category2', 10)->nullable();
            $table->string('doll_name2', 20)->nullable();
            $table->string('message', 20)->nullable();
            $table->string('comment', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
};
