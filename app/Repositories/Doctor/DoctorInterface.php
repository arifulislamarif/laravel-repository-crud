<?php

namespace App\Repositories\Doctor;

interface DoctorInterface {
    public function all();

    public function store(array $data);

    public function update(array $data, $doctor);

    public function delete($doctor);
}
