<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     *  @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table){
            $table->id();
            $table->string('name', 100);
            $table->timestamps();
        });
    }

    /**
     * @return void
     */
    public function down()
    {
        //
    }
};
