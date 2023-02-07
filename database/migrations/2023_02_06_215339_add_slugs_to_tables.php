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
        Schema::table('sets', function (Blueprint $table) {
            $table->string("slug")->unique();
        });

        Schema::table('attributes', function (Blueprint $table) {
            $table->string("slug")->unique();
        });

        Schema::table('characters', function (Blueprint $table) {
            $table->string("slug")->unique();
        });

        Schema::table('cards', function (Blueprint $table) {
            $table->string("slug")->unique();
        });

        Schema::table('statuses', function (Blueprint $table) {
            $table->string("slug")->unique();
        });

        Schema::table('teams', function (Blueprint $table) {
            $table->string("slug");
        });

        Schema::table('card_types', function (Blueprint $table) {
            $table->string("slug")->unique();
        });

        Schema::table('card_phases', function (Blueprint $table) {
            $table->string("slug")->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tables', function (Blueprint $table) {
            //
        });
    }
};
