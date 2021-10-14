<?php

namespace App\Actions\Fortify;

use App\Models\Doctor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewDoctors;
use Laravel\Jetstream\Jetstream;

class CreateNewDoctor implements CreatesNewDoctors
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
            'apellido' => ['required', 'string', 'max:255'],
            'identificacion'=> ['required', 'string', 'max:12','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telefono'=> ['required', 'string', 'max:10'],
            'especialidad' => ['required', 'string', 'max:255'],
        ])->validate();

        return Doctor::create([
            'nombre' => $input['nombre'],
            'apellido' => $input['apellido'],
            'identificacion' => $input['identificacion'],
            'email' => $input['email'],
            'telefono' => $input['telefono'],
            'especialidad' => $input['especialidad'],
        ]);
    }
}
