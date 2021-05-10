<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('general', function (Blueprint $table) {
			$table->id();
			$table->string('site_title');
			$table->string('favicon');
			$table->string('header_logo');
			$table->string('footer_logo');
			$table->string('footer_desc');
			$table->string('facebook');
			$table->string('instagram');
			$table->string('twitter');
			$table->string('linkedin');
			$table->string('mobile');
			$table->string('email');
			$table->string('address');
			$table->string('tags');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('general');
	}
}
