<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('files', function(Blueprint $table)
		{
			$table->char('id', 8);
			$table->string('name', 255);
			$table->string('original_name', 255);
			$table->string('extension', 255);
			$table->string('type', 255);
			$table->string('location', 255);
			$table->string('url', 255);
			$table->string('uploader', 10);
			$table->boolean('public');
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
		Schema::drop('files');
	}

}
