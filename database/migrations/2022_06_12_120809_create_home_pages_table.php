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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('icon');
            $table->string('mainpic');
            $table->string('cardpic');
            $table->string('mainline');
            $table->string('secondaryline');
            $table->string('cardmain');
            $table->string('card1');
            $table->string('card2');
            $table->string('card3');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_pages');
    }
};
