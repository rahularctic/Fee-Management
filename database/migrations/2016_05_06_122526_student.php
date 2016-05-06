<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Student extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('student', function (Blueprint $table) {
            $table->increments('receiptId');
            $table->string('name');
            $table->string('email')->unique();
			$table->integer('mobile');            
			$table->integer('feeType');            
			$table->integer('fees');            
			$table->string('standard'); 
            $table->rememberToken();
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
        //
    }
}
