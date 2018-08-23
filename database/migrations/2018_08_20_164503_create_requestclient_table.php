<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestclientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // lawejli 3la requestclients win mawjouda fe projet
    public function up()
    {
        Schema::create('requestclients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->integer('phone');
            $table->string('message');
            $table->string('website');
            $table->boolean('statue')->default(0);
            //
            $table->timestamps();
        });
        // 3malt migrate maw? e y choof
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requestclients');
    }
}
