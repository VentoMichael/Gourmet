<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExposantsTable extends Migration {

	public function up()
	{
		Schema::create('exposants', function(Blueprint $table) {
			$table->id();
			$table->string('shop_name', 256);
			$table->string('phone',256);
			$table->string('email', 256);
			$table->string('website', 256);
			$table->string('location', 256);
			$table->string('postal_code')->nullable();
            $table->boolean('participate_other_exhibition_belgium');
			$table->boolean('bio_product');
			$table->text('product_description');
			$table->text('comment_for_organizer')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
	}

	public function down()
	{
		Schema::drop('exposants');
	}
}
