<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('birthdate');
            $table->string('registration_number');
            $table->string('address');
            $table->string('address_number');
            $table->string('complement')->nullable();
            $table->string('neighborhood');
            $table->string('city');
            $table->string('state');
            $table->string('zipcode');
            $table->string('sex');
            $table->string('document');
            $table->string('phone_number');
            $table->string('responsible_name');
            $table->string('responsible_document');
            $table->string('responsible_phone_number');
            $table->integer('class_id')->unsigned()->nullable();
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('restrict');
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
        Schema::drop('students');
    }
}
