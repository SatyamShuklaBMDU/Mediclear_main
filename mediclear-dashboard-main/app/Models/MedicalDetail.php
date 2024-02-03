<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class MedicalDetail extends Model
{
    use HasFactory;
    protected $table = "medical_details";

    protected $fillable = [
        'cusmerbatchdetails_id',
        'cusmerbatchdetails_type',
        'certification_number',
        'parent_id',
        'test_type_id',
        'consumer_status',
        'consumer_name',
        'consumer_location',
        'consumer_mob_no',
        'consumer_dob',
        'consumer_addhar_number',
        'consumer_profile_image_name',
        'consumer_sign_image_name',
        'gender',
        'light_hedness_or_swim_sensation_in_the_head',
        'blacking_out_or_loss_of_consciousness',
        'object_spinning_or_turning_around_you',
        'nausea_or_vomiting',
        'tingling_in_your_fingers_toes_around_your_mouth',
        'does_changes_of_position_make_you_dizzy',
        'when_you_are_dizzy_must_support_yourself_when_standing',
        'post_mediacal_history_disease',
        'defficulting_in_hearing',
        'noise_in_ears',
        'fullness_or_stuffiness_in_your_ears',
         'tendency_to_fall',
        'loss_of_balance_while_walking',
        'complaint',


    ];

    protected function post_mediacal_history_disease(): Attribute
    {
        return Attribute::make(

            get: fn($value) => json_decode($value, true),
            set: fn($value) => json_encode($value),
        );
    }

    protected function defficulting_in_hearing(): Attribute
    {
        return Attribute::make(
            get: fn($value) => json_decode($value, true),
            set: fn($value) => json_encode($value),
        );
    }

    protected function noise_in_ears(): Attribute
    {
        return Attribute::make(
            get: fn($value) => json_decode($value, true),
            set: fn($value) => json_encode($value),
        );
    }


    protected function fullness_or_stuffiness_in_your_ears(): Attribute
    {
        return Attribute::make(
            get: fn($value) => json_decode($value, true),
            set: fn($value) => json_encode($value),
        );
    }
    
    
    protected function tendency_to_fall(): Attribute
    {
        return Attribute::make(

            get: fn($value) => json_decode($value, true),
            set: fn($value) => json_encode($value),
        );
    }


    protected function loss_of_balance_while_walking(): Attribute
    {
        return Attribute::make(

            get: fn($value) => json_decode($value, true),
            set: fn($value) => json_encode($value),
        );
    }

    //  protected function complaint(): Attribute
    //  {
    //      return Attribute::make(
    //          get: fn($value) => json_decode($value, true),
    //          set: fn($value) => json_encode($value),
    //      );
    //  }

    public function cusmerbatchdetails()
    {
        return $this->morphTo();
    }

}
