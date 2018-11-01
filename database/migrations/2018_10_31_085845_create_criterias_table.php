<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criterias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->index()->unsigned()->nullable();
            $table->integer('category_id')->nullable();
            $table->string('type')->nullable();
            $table->string('document')->nullable();
            $table->integer('weightage')->nullable();
            $table->string('category_name')->nullable();
            $table->string('subcategory_name')->nullable();
            $table->string('benchmarking')->nullable();
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criterias');
    }
}
