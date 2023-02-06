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
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->longText("question");
            $table->longText("answer");
            $table->timestamps();
        });

        Schema::create("card_faq", function (Blueprint $table) {
            $table->foreignId("card_id")->references("id")->on("cards");
            $table->foreignId("faq_id")->references("id")->on("faqs");
            $table->timestamps();
        });

        Schema::create("character_faq", function (Blueprint $table) {
            $table->foreignId("character_id")->references("id")->on("characters");
            $table->foreignId("faq_id")->references("id")->on("faqs");
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
        Schema::dropIfExists('faqs');
    }
};
