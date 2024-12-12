<?php

namespace App\Http\Controllers\Api;

use App\Models\Cat;
use App\Http\Controllers\Controller;
use App\Http\Requests\Cat\StoreCatRequest;
use App\Http\Requests\Cat\UpdateCatRequest;
use App\Http\Responses\ApiResponse;
use Exception;
use App\Http\Resources\Api\CatResource;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $cats = Cat::query()
                ->with(['breed'])
                ->orderBy('id', 'DESC')
                ->get();

            return ApiResponse::Success(
                'Cats List',
                 $cats,
                  200
                );
        } catch (Exception $e) {
            return ApiResponse::Error($e->getMessage(), $e, 500);
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCatRequest $request)
    {
        try {
            $data = $request->validated();

            $cat = Cat::create($data);

            return ApiResponse::Success('Cat Created Successfully', $cat, 201);
        } catch (Exception $e) {
            return ApiResponse::Error($e->getMessage(), $e, 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Cat $cat)
    {
        try {
            
            return ApiResponse::Success('Cat Details', $cat->load(['breed']), 200);
        } catch (Exception $e) {
            return ApiResponse::Error($e->getMessage(), $e, 500);
        }
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCatRequest $request, Cat $cat)
    {
        try {
            $data = $request->validated();

            $cat->update($data);

            return ApiResponse::Success('Cat Updated Successfully', $cat->load(['breed']), 200);
        } catch (Exception $e) {
            return ApiResponse::Error($e->getMessage(), $e, 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cat $cat)
    {
        try {
            $cat->delete();

            return ApiResponse::Success('Cat Deleted Successfully', [], 200);
        } catch (Exception $e) {
            return ApiResponse::Error($e->getMessage(), $e, 500);
        }
    }
}
