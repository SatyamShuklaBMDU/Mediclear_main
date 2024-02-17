<?php

namespace App\Rules;
use App\Models\Test;

use Illuminate\Contracts\Validation\Rule;
class CountResultGivenByDoctor implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    protected  $consumerId;
    public function __construct($id)
    {
        $this->consumerId=$id;
    }
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $CountRisultGivenByDoctor=Test::where('medical_details_id',$this->consumerId)->where('test_type_id', '1')->where('test_status', '1')->where('test_results','!=',null)->count();
        return  $value==$CountRisultGivenByDoctor;
    }
    /**
    * Get the validation error message.
    *
    * @return string
    */
    public function message()
    {
        return 'Please submit all remaing test results of consumer!';
    }
}
