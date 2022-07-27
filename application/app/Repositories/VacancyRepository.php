<?php

namespace App\Repositories;

use App\Interfaces\MainInterface;
use App\Models\Vacancy;
use App\Traits\DataSetter;

class VacancyRepository implements MainInterface
{
    use DataSetter;

    public function getAll()
    {
        return Vacancy::get();
    }

    /**
     * @param $data
     * @return Vacancy|array
     */
    public function store($data)
    {
        return Vacancy::createNew($data);
    }

    /**
     * @param $data
     * @param $id
     * @return Vacancy|array
     */
    public function update($id, $data)
    {
        $vacancy = Vacancy::find($id);
        $vacancy = $this->setValues($vacancy, $data);

        return $vacancy->save() ? $vacancy : [];
    }

    public function delete($id)
    {
        $vacancy = Vacancy::findOrFail($id);

        return $vacancy->delete();
    }
}
