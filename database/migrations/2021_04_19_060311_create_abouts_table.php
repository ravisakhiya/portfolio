<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('about', function (Blueprint $table) {
			$table->id();
			$table->string('title');
			$table->text('detail');
			$table->string('image');
			$table->string('resume');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */

	public function down() {
		Schema::dropIfExists('abouts');
	}
}
