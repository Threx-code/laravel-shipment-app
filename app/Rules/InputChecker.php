<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class InputChecker implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        $attribute = "/^[ A-Za-z0-9._-]+$/";
        $value = preg_replace('!\s+!', ' ', $value);
        if(!empty($value)){
            return  preg_match($attribute, $value);
        }
        
            return true;
       

        
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute cannot contain special characters';
    }
}
