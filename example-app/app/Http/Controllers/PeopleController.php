<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(PeopleController::all(), 200);
    }
    public function read(): JsonResponse
        {
            return response()->json(PeopleController::all(), 200);
        }

    public function put(): JsonResponse
        {
            return response()->json(PeopleController::all(), 200);
        }

    public function create(): JsonResponse
        {
            return response()->json(PeopleController::all(), 200);
        }
    public function delete(): JsonResponse
                {
                    return response()->json(PeopleController::all(), 200);
                }
}
