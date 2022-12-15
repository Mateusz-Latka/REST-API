<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\PeoplePostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PeopleController extends Controller
{

    public function index(): JsonResponse
    {
        return response()->json(People::all(),200);
    }

    public function show(People $people): JsonResponse
    {
        return response()->json($people,200);
    }

    public function delete(People $people): JsonResponse
    {
        $people->delete();

        return response()->json(null, 204);
    }

    public function create(PeoplePostRequest $request): JsonResponse
    {
        $people = People::create($request->all());

        return response()->json($people, 201);
    }

    public function update(PeoplePostRequest $request, People $people): JsonResponse
    {
        $people->update($request->all());

        return response()->json($people, 200);
    }
}
