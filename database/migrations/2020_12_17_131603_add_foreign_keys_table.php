<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tags', function (Blueprint $table) {
            $table->foreignId("exposant_id")->constrained('exposants');
        });
        Schema::table('gallery', function(Blueprint $table) {
            $table->foreignId("edition_id")->constrained('editions');
        });
        Schema::table('exposants', function(Blueprint $table) {
            $table->foreignId('country_id')->constrained('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_keys');
    }
}
