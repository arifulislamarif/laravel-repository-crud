<?php

namespace App\Repositories\Doctor;

use App\Models\Doctor;
use App\Repositories\Doctor\DoctorInterface;

class DoctorRepositories implements DoctorInterface {

    public function all(){
       return Doctor::all();
    }

    public function store(array $data){
        return Doctor::create($data);
    }

    public function update(array $data, $doctor){
        return $doctor->update($data);
    }

    public function delete($doctor){
        return $doctor->delete();
    }
}
