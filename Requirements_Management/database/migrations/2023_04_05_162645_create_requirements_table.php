<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequirementsTable extends Migration
{
   
    public function up()
    {
        Schema::create('requirements', function (Blueprint $table) {
            $table->id();
            $table->string('DEMO1');
            $table->string('DEMO2');
            $table->string('DEMO3');
            $table->string('DEMO4');
            $table->string('DEMO5');
            $table->string('DEMO6');
            $table->string('DEMO7');
            $table->string('DEMO8');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('requirements');
    }
}
