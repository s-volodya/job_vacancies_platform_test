<?php

namespace App\Repositories;

use App\Interfaces\MainInterface;
use App\Models\Vacancy;

class VacancyRepository implements MainInterface
{
    public function getAll()
    {
    }

    /**
     * @param $data
     * @param $id
     * @return Vacancy|array
     */
    public function storeOrUpdate($data, $id = null)
    {
        $vacancy = is_null($id) ? new Vacancy() : Vacancy::find($id);

        if (isset($data['creator_id'])) {
            $vacancy->creator_id = $data['creator_id'];
        }

        if (isset($data['title'])) {
            $vacancy->title = $data['title'];
        }

        if (isset($data['description'])) {
            $vacancy->description = $data['description'];
        }

        return $vacancy->save() ? $vacancy : [];
    }

    public function delete($id)
    {
    }
}
