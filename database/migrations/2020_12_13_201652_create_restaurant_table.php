<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateRestaurantTable extends Migration {

	public function up()
	{
		Schema::create('restaurant', function(Blueprint $table) {
            $table->id();
			$table->smallInteger('order');
			$table->string('dish_section', 256);
			$table->string('title_dish', 256);
			$table->string('description_dish', 256)->nullable();
			$table->smallInteger('price_dish')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
	}

	public function down()
	{
		Schema::drop('restaurant');
	}
}
