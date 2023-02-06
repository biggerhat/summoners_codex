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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->foreignId("set_id")->references("id")->on("sets");
            $table->integer("initiative")->nullable();
            $table->integer("health")->nullable();
            $table->integer("hand_size")->nullable();
            $table->integer("victory_points")->nullable();
            $table->integer("movement")->nullable();
            $table->integer("action")->nullable();
            $table->longText("skills")->nullable();
            $table->longText("constant_ability")->nullable();
            $table->longText("upgrade_ability")->nullable();
            $table->integer("upgrade_wind")->nullable();
            $table->integer("upgrade_shell")->nullable();
            $table->integer("upgrade_fire")->nullable();
            $table->integer("upgrade_heart")->nullable();
            $table->timestamps();
        });

        Schema::create("attribute_character", function (Blueprint $table) {
            $table->foreignId("attribute_id")->references("id")->on("attributes");
            $table->foreignId("character_id")->references("id")->on("characters");
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
        Schema::dropIfExists('characters');
    }
};
