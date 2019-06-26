<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficeUseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_use', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('member_id');
            $table->integer('membership_number');
            $table->string('doa');
            $table->string('doe');
            $table->double('entrance_fees', 15, 8);
            $table->double('subscription_fee',15,8);
            $table->date('paid_from');
            $table->date('paid_to');
            $table->timestamps();
            $table->integer('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('office_use');
    }
}
