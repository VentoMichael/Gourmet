<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;use Illuminate\Support\Facades\Schema;


class CreatePraticalInfosTable extends Migration {

	public function up()
	{
		Schema::create('praticalinfos', function(Blueprint $table) {
            $table->id();
            $table->smallInteger('priceTicket')->default('255');
            $table->string('date');
			$table->string('place', 256);
			$table->string('email', 256);
			$table->string('website');
            $table->float('stock');
			$table->string('phone',256);
            $table->timestamps();
            $table->softDeletes();
        });
	}

	public function down()
	{
		Schema::drop('praticalinfos');
	}
}
