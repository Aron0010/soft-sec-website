<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array
     */
    protected function passwordRules()
    {

        return ['required', 'string', new \Valorin\Pwned\Pwned(300), (new Password)->length(7), 'confirmed'];
    }
}