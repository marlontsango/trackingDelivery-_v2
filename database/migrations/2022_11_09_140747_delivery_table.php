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
        Schema::create('delivery', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ville')->nullable();

            $table->string('heure_depart');
            $table->string('destination');
            $table->string('heure_arrive')->nullable();
            $table->string('localisation')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('client_id')->index();

            $table->foreign('client_id')
                            ->references('id')
                            ->on('clients');


        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('delivery');

        //
    }
};
