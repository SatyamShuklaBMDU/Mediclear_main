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
        Schema::create('medical_details', function (Blueprint $table) {
            $table->id();
            $table->morphs('consumer_batch');
            $table->unsignedBigInteger('test_type_id');
            $table->foreign('test_type_id')
                ->references('id')
                ->on('test_types')
                ->onDelete('cascade');
            $table->string('consumer_name');
            $table->string('consumer_profile');
            $table->string('consumer_location');
            $table->string('consumer_mob_no');
            $table->date('consumer_dob');
            $table->string('consumer_addhar_number');
            $table->enum('gender', ['male', 'female', 'others'])->default('others');
            $table->enum('light_hedness_or_swim_sensation_in_the_head', ['yes', 'no'])->default('no');
            $table->enum('blacking_out_or_loss_of_consciousness', ['yes', 'no'])->default('no');
            $table->enum('object_spinning_or_turning_around_you', ['yes', 'no'])->default('no');
            $table->enum('nausea_or_vomiting', ['yes', 'no'])->default('no');
            $table->enum('tingling_in_your_fingers_toes_around_your_mouth', ['yes', 'no'])->default('no');
            $table->enum('does_changes_of_position_make_you_dizzy', ['yes', 'no'])->default('no');
            $table->enum('when_you_are_dizzy_must_support_yourself_when_standing', ['yes', 'no'])->default('no');
            $table->json('post_mediacal_history_disease');
            $table->json('defficulting_in_hearing');
            $table->json('noise_in_ears');
            $table->json('fullness_or_stuffiness_in_your_ears');
            $table->json('complaints');
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
        Schema::dropIfExists('medical_details');
    }
};
