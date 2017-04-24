<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->text('image');
			$table->integer('level');
			$table->rememberToken();
			$table->timestamps();
		});
		DB::table('users')->insert([
						'name' => 'Tan Hendra',
						'email' => 'k@k.com',
						'password' => bcrypt('asd'),
						'image' => 'images/user/1.jpg',
						'level' => '100',
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
		Schema::drop('users');
	}

}
