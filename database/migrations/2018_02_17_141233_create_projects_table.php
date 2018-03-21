<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_name');
            $table->longText('project_description');	
            $table->string('project_date');
            $table->string('project_slug');
            $table->boolean('is_authorized');
            $table->integer('project_degree')->unsigned();
            $table->integer('project_author')->unsigned();
            $table->foreign('project_author')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('project_degree')->references('id')->on('degrees')->onDelete('cascade');
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
        Schema::dropIfExists('projects');
    }
}
