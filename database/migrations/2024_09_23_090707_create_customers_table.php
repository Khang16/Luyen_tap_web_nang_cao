<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(){
        Schema::create('customers',function(Blueprint $table){
            $table->id();
            $table->string('fullname',100)->unique();
            $table->string('email',50);
            $table->string('phone',50)->nullable();
            $table->string('image',255)->nullable();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('customers');
    }
};
