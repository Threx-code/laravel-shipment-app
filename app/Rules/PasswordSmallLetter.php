<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PasswordSmallLetter implements Rule
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
    public function passes($attribute, $password)
    {
        $password = trim(preg_replace('/\s+/', '', $password));
         if(!empty($password)){
            if(preg_match("/[a-z]/", $password)){
                return $password;
            }
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute should contain at least one small Letter (a-z).';
    }
}
