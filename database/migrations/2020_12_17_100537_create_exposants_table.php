<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExposantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exposants', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name', 256)->unique();
            $table->string('phone',256);
            $table->string('email', 256);
            $table->string('website', 256);
            $table->string('location');
            $table->boolean('participate_other_exhibition_belgium')->nullable();
            $table->boolean('bio_product');
            $table->boolean('accepted')->default(false);
            $table->text('product_description');
            $table->text('comment_for_organizer')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exposants');
    }
}
