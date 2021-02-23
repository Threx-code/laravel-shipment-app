<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ArrayChecker implements Rule
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
    public function passes($attribute, $values)
    {
        $attribute = "/^[ A-Za-z0-9._-]+$/";
        $values = preg_replace('!\s+!', ' ', $values);
        if(!empty($values)){
            if(is_array($values)){
                foreach ($values as  $value) {
                    return  preg_match($attribute, $value);
                    
                }  
            }
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
