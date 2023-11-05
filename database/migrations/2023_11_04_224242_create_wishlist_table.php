<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('wishlist', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->string('description');
			$table->string('link_product');
			$table->integer('price_product');
			$table->enum('status', ['start', 'done']);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('wishlist');
	}
};
