<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\VacancyRepository as Repository;
use Illuminate\Http\Response;
use Validator;

class VacancyController extends AppController
{
    public function __construct(Repository $repository)
    {
        $this->middleware('auth:api', ['except' => ['index']]);
        parent::__construct($repository);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        //
//        dd("function index");
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
        //
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'creator_id' => 'required|numeric|exists:users,id',
            'title'      => 'required|string|'
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_BAD_REQUEST);
        }

        $data = $request->only([
            'creator_id',
            'title',
            'description'
        ]);

        return response()->json([
            'data' => $this->repository->storeOrUpdate($data)],
            Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    /*public function show(Vacancy $vacancy)
    {
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    /*public function edit(Vacancy $vacancy)
    {
        //
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request, Vacancy $vacancy)
    {
        //
    }*/

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    /*public function destroy(Vacancy $vacancy)
    {
        //
    }*/
}
