<?php

namespace App\Interfaces;

interface MainInterface
{
    public function getAll();
    public function store($data);
    public function update($id, $data);
    public function delete($id);
}
