<?php

namespace App\Repositories;

use App\Models\Student;
use App\Repositories\StudentInterface;

class StudentRepositories implements StudentInterface {

    public function all(){
       return Student::all();
    }

    public function store(array $data){
        return Student::create($data);
    }

    public function update(array $data, $student){
        return $student->update($data);
    }

    public function delete($student){
        return $student->delete();
    }
}
