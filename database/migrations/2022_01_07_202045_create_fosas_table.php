<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFosasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fosas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_fosa_id');
            $table->unsignedBigInteger('region_id');
            $table->unsignedBigInteger('department_id')->nullable();
            $table->string('name')->unique();
            $table->foreign('type_fosa_id')->references('id')->on('type_fosas')->cascadeOnDelete();
            $table->foreign('region_id')->references('id')->on('regions')->cascadeOnDelete();
            $table->foreign('department_id')->references('id')->on('departments')->cascadeOnDelete();
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
        Schema::dropIfExists('fosas');
    }
}
