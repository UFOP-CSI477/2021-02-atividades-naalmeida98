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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories');
            $table->timestamps();
            $table->string('name',70);
            $table->string('code',50);
            $table->float('value_av',7,2);
            $table->float('value_ap',7,2);
            $table->string('description',500);
            // $table->integer('size');
            // $table->string('type',15);
            // $table->string('category',30);
            // $table->integer('qtdStock');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
