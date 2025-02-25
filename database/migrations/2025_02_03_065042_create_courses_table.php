<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('thumbnail');
            $table->decimal('regular_price', 8, 2)->default(0);
            $table->decimal('discount_price', 8, 2)->nullable();
            $table->integer('total_enroll')->nullable();
            $table->integer('total_video')->nullable();
            $table->string('course_trial_video')->nullable();
             $table->text('tags')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0:coming; 1:active; 2:paused');
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
        Schema::dropIfExists('courses');
    }
}
