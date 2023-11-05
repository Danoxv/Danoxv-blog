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
		Schema::create('projects', function (Blueprint $table) {
			$table->id();
			$table->string('name', '64');
			$table->text('description');
			$table->enum('status', ['started', 'processing', 'done']);
			$table->timestamp('started_at');
			$table->timestamp('ready_at');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('projects');
	}
};
