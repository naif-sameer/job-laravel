<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('user_infos', function (Blueprint $table) {
      $table->id();
      $table->string('phone');
      $table->string('gender');
      $table->dateTime('birth_date');
      $table->string('description');
      $table->boolean('is_active')->default(1);

      $table->foreignId('experience_id');
      $table->foreign('experience_id')->references('id')->on('user_experiences')->onDelete('cascade');

      $table->foreignId('course_id');
      $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');

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
    Schema::dropIfExists('user_infos');
  }
};
