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
        Schema::table('customerbatchs', function (Blueprint $table) {
            $table->string('recieved_payment')->after('per_test_amount')->nullable();
            $table->string('pending_payment')->after('recieved_payment')->nullable();
            $table->timestamp('date_of_approved')->nullable();
            $table->boolean('report_status')->after('recieved_payment')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customerbatchs', function (Blueprint $table) {
            //
        });
    }
};
