<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'nombre' => ['required', 'string', 'max:255'],
            'identificacion'=> ['required', 'string', 'max:12','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telefono'=> ['required', 'string', 'max:10'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'nombre' => $input['nombre'],
            'apellido' => $input['apellido'],
            'identificacion' => $input['identificacion'],
            'edad' => $input['edad'],
            'email' => $input['email'],
            'telefono' => $input['telefono'],
            'direccion' => $input['direccion'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
