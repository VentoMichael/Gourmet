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
        Schema::table('galleries', function(Blueprint $table) {
            $table->foreignId("edition_id")->constrained('editions');
        });
        Schema::table('exposants', function(Blueprint $table) {
            $table->foreignId("product_id")->constrained('products');
            $table->foreignId("country_id")->constrained('countries');
        });
        Schema::table('exposant_tag', function(Blueprint $table) {
            $table->bigInteger('exposant_id')->unsigned();
            $table->bigInteger('tag_id')->unsigned();
            $table->foreign('exposant_id')
                ->references('id')
                ->on('exposants');
            $table->foreign('tag_id')
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
