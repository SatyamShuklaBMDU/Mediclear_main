<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporatebatchs', function (Blueprint $table) {
            $table->id();
            $table->string('batch_no');
            $table->string('test');
            $table->unsignedBigInteger('corporate_id');
            $table->foreign('corporate_id')
                ->references('id')
                ->on('corporate_i_d_s')
                ->onDelete('cascade');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')
                ->references('id')
                ->on('company')
                ->onDelete('cascade');

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
        Schema::dropIfExists('corporatebatchs');
    }
};
