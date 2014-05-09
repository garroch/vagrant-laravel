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
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->string('username',64);
			$table->string('password',64);
			$table->string('name',128);
			$table->timestamps();
		});

		DB::table('users')->insert(array(
			'username'=>'admin',
			'password'=>Hash::make('password'),
			'name'=>'Admin'
		));
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
