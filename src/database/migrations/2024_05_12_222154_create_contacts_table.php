<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('contacts'); 
        
        
        Schema::create('contacts', function (Blueprint $table){
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->tinyInteger('gender')->unsigned();
            $table->string('email', 255);
            $table->string('tel_1', 255);
            $table->string('tel_2', 255)->nullable();
            $table->string('tel_3', 255)->nullable();
            $table->string('address', 255);
            $table->string('building', 255);
            $table->text('detail');
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
        Schema::dropIfExists('contacts');
    }
}
