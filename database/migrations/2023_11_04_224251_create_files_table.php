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
		Schema::create('files', function (Blueprint $table) {
			$table->id();
			$table->string('filename');
			$table->string('url');
			$table->foreignId('project_id');
			$table->integer('number');
			$table->boolean('is_main');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('files');
	}
};
