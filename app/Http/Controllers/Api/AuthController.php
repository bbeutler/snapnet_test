<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use App\Services\Auth\AuthService;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected AuthService $service;
    
    public function __construct()
    {
        $this->service = new AuthService();
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request): JsonResponse
    {
        return response()->json($this->service->registerAdminUser($request));
    }

    public function get(): JsonResponse
    {
        return response()->json($this->service->fetchRecords());
    }
}
