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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->integer('member_id');
            $table->integer('project_id');

            // $table->unsignedBigInteger('member_id');
            // $table->foreign('member_id')->references('id')->on('members');
            
            // $table->BigInteger('member_id')->unsigned();
            // $table->foreign('member_id')->references('id')->on('members');
            // $table->BigInteger('project_id')->unsigned();
            // $table->foreign('project_id')->references('id')->on('projects');
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
        Schema::dropIfExists('teams');
    }
};
