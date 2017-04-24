<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('page', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('page');
			$table->string('section');
			$table->text('idn')->nullable();
			$table->text('eng')->nullable();
			$table->text('image')->nullable();
			$table->timestamps();
		});
		DB::table('page')->insert([
						'page' => 'MAIN',
						'section' => '',
						'idn' => '',
						'eng' => '',
						'image' => '',
				]
		);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('page');
	}

}
