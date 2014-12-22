<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWinnersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('winners', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('fullName');
            $table->text('image');
            $table->string('recipeName');
            $table->text('ingredients');
            $table->date('date');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('winners');
	}

}
