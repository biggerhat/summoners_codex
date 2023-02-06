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
        Schema::create('erratas', function (Blueprint $table) {
            $table->id();
            $table->longText("description");
            $table->string("source")->nullable();
            $table->timestamps();
        });

        Schema::create("card_errata", function (Blueprint $table) {
            $table->foreignId("card_id")->references("id")->on("cards");
            $table->foreignId("errata_id")->references("id")->on("erratas");
            $table->timestamps();
        });

        Schema::create("character_errata", function (Blueprint $table) {
            $table->foreignId("character_id")->references("id")->on("characters");
            $table->foreignId("errata_id")->references("id")->on("erratas");
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
        Schema::dropIfExists('erratas');
    }
};
