<?php

namespace App\Http\Controllers\Api;

use App\Models\Breed;
use App\Http\Controllers\Controller;
use App\Http\Requests\Breed\StoreBreedRequest;
use App\Http\Requests\Breed\UpdateBreedRequest;
use App\Http\Responses\ApiResponse;
use Exception;

class BreedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $breeds = Breed::query()->withTrashed()->orderBy('id', 'DESC')->get();

            return ApiResponse::Success('Breeds List', $breeds, 200);
        } catch (Exception $e) {
            return ApiResponse::Error($e->getMessage(), $e, 500);
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBreedRequest $request)
    {
        try {

            $data = $request->validated();

            $breed = Breed::create($data);

            return ApiResponse::Success('Breed Created Successfully', $breed, 201);
        } catch (Exception $e) {
            return ApiResponse::Error($e->getMessage(), $e, 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Breed $breed)
    {
        try {
            return ApiResponse::Success('Breed Details', $breed, 200);
        } catch (Exception $e) {
            return ApiResponse::Error($e->getMessage(), $e, 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBreedRequest $request, Breed $breed)
    {
        try {
            $data= $request->validated();

            $breed->update($data);

            return ApiResponse::Success('Breed Updated Successfully', $breed, 200);

        } catch (Exception $e) {
            return ApiResponse::Error($e->getMessage(), $e, 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Breed $breed)
    {
        try {
            $breed->delete();

            return ApiResponse::Success('Breed Deleted Successfully', [], 200);
        } catch (Exception $e) {
            return ApiResponse::Error($e->getMessage(), $e, 500);
        }
    }
}
