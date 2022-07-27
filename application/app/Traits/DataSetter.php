<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;

trait DataSetter
{
    public function setValues(Model $model, $data)
    {
        foreach($data as $key => $value) {
            $model->{$key} = $value;
        }

        return $model;
    }
}
