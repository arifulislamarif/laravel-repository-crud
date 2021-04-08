<?php

namespace App\Repositories;

interface StudentInterface {
    public function all();

    public function store(array $data);

    public function update(array $data, $student);

    public function delete($student);
}
