<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PersonalProjectDescriptionLength implements Rule
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
        $length = array_map('strlen', $values);
        if(max($length) <= 200){
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute maximum characters is 200';
    }
}
