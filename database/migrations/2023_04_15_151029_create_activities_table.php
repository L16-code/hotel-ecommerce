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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('status');
            $table->string("name");
            $table->string("email");
            $table->string("role");
            $table->string("business_name");
            $table->string("country");
            $table->string("city");
            $table->string("not_listed");
            $table->string("country_code");
            $table->char("s_address")->nullable();
            $table->char("a_address")->nullable();
            $table->string("latitude")->nullable();
            $table->string("longitude")->nullable();
            $table->string("singlemap")->nullable();
            $table->string("phone")->nullable();
            $table->string("fax")->nullable();
            $table->string("inquiry_email")->nullable();
            $table->string("website")->nullable();
            $table->string("facebook")->nullable();
            $table->string("instagram")->nullable();
            $table->string("twitter")->nullable();
            $table->string("linkedin")->nullable();
            $table->string("monday")->nullable();
            $table->string("tuesday")->nullable();
            $table->string("wednesday")->nullable();
            $table->string("thursday")->nullable();
            $table->string("friday")->nullable();
            $table->string("saturday")->nullable();
            $table->string("sunday")->nullable();
            $table->string("itinerary")->nullable();
            $table->longText("description")->nullable();
            $table->string("duration")->nullable();
            $table->string("group_size")->nullable();
            $table->date("date")->nullable();
            $table->string("pickup")->nullable();
            $table->mediumInteger("age")->nullable();
            $table->longText("message")->nullable();
            $table->string("included")->nullable();
            $table->string("not_included")->nullable();
            // $table->string("files[]");
            $table->text("agree");
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
        Schema::dropIfExists('activities');
    }
};
