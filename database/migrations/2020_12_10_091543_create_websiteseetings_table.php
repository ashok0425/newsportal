<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteseetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websiteseetings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->text('aboutus_en')->nullable();
            $table->text('aboutus_np')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_en')->nullable();
            $table->string('phone_np')->nullable();

            $table->string('address_en')->nullable();
            $table->string('address_np')->nullable();

            $table->text('term_en')->nullable();
            $table->text('term_np')->nullable();
            $table->string('copy')->nullable();
            $table->string('developer')->nullable();
        

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
        Schema::dropIfExists('websiteseetings');
    }
}
