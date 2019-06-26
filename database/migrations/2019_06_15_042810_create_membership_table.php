<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('member_number');
            $table->string('member_title');
            $table->string('name');
            $table->string('gender');
            $table->integer('designation_id');
            $table->string('email');
            $table->integer('phone');
            $table->integer('country');
            $table->integer('state');
            $table->integer('city');
            $table->string('address_one');
            $table->string('address_two');
            $table->string('address_three');
            $table->integer('race_id');
            $table->string('old_ic');
            $table->string('new_ic');
            $table->date('dob');
            $table->date('doj');
            $table->string('email_verified_at');
            $table->string('password');
            $table->integer('user_type');
            $table->string('is_request_approved');   
            $table->timestamps();
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membership');
    }
}
