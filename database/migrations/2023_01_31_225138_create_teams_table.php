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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->longText("description")->nullable();
            $table->timestamps();
        });

        Schema::create("character_team", function (Blueprint $table) {
            $table->foreignId("character_id")->references("id")->on("characters");
            $table->foreignId("team_id")->references("id")->on("teams");
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
        Schema::dropIfExists("character_team");
        Schema::dropIfExists('teams');
    }
};
