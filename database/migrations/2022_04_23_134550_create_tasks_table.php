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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status')->nullable();
            $table->date('startDate')->format('d/m/Y')->nullable();
            $table->date('endDate')->format('d/m/Y')->nullable();
            $table->foreignId('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreignId('project_id')
                ->references('id')->on('projects')
                ->onDelete('cascade');
            $table->longText('bio')->nullable();
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
        Schema::dropIfExists('tasks');
    }
};