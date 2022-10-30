<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_manager', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('developer_id');
            $table->string('task_id');
            $table->integer('week_number');
            $table->integer('estimated_time_to_finish');
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
        Schema::dropIfExists('task_manager');
    }
}
