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
        Schema::table('gallery', function(Blueprint $table) {
            $table->foreignId("edition_id")->constrained('editions');
        });
        Schema::table('exposants', function(Blueprint $table) {
            $table->foreignId('countries_id')->constrained('countries');
        });
        Schema::table('exposants_tags', function(Blueprint $table) {
            $table->bigInteger('exposants_id')->unsigned();
            $table->bigInteger('tags_id')->unsigned();
            $table->foreign('exposants_id')
                ->references('id')
                ->on('exposants');
            $table->foreign('tags_id')
                ->references('id')
                ->on('tags');
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
