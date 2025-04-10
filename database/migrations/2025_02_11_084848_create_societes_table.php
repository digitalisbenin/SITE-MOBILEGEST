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
        Schema::create('societes', function (Blueprint $table) {
            $table->id();
            $table->string('NomSociete')->nullable();
            $table->string('Adresse')->nullable();
            $table->string('CodePostal')->nullable();
            $table->string('Ville')->nullable();
            $table->string('Telephone')->nullable();
            $table->string('url_site')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('Logo')->nullable();
            $table->string('Fax')->nullable();
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
        Schema::dropIfExists('societes');
    }
};
