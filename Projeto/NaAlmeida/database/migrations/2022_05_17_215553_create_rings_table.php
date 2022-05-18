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
        Schema::create('rings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name',25);
            $table->string('code',12);
            $table->float('value',2,2);
            $table->string('description',100);
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
        Schema::dropIfExists('rings');
    }
};