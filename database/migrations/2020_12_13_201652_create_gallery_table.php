<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleryTable extends Migration {

	public function up()
	{
		Schema::create('gallery', function(Blueprint $table) {
			$table->id();
            $table->string('image', 256);
            $table->string('alt', 256);
            $table->timestamps();
            $table->softDeletes();
        });
	}

	public function down()
	{
		Schema::drop('gallery');
	}
}
