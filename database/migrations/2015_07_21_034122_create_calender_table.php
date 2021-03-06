<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalenderTable extends Migration{
    public function up(){
		Schema::create('calenders', function(Blueprint $table){
			$table->increments('id');
			$table->string('title');
			$table->text('content');
			$table->date('event_date');
			$table->date('previous_date');
			$table->date('next_date');
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
		Schema::drop('calenders');
    }
}
