<?php

namespace Laravel\Fortify\Contracts;

interface CreatesNewDoctors
{
    /**
     * Validate and create a newly registered doctor.
     *
     * @param  array  $input
     * @return mixed
     */
    public function create(array $input);
}
