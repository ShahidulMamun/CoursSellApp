<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
        $table->id();  // This will create the auto-incrementing `id` column
        $table->unsignedBigInteger('admin_id'); // Ensures the foreign key is the same type as `admin.id`
        $table->foreign('admin_id')
            ->references('id')
            ->on('admins')
            ->onDelete('cascade');  // Foreign key constraint
        $table->string('type'); // e.g. 'user_registered', 'course_purchased'
        $table->text('message'); // The message for the notification
        $table->boolean('is_read')->default(false); // Mark if notification is read
        $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
