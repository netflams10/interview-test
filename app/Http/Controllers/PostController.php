<?php

namespace App\Http\Controllers;

use App\Service\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }
    public function index()
    {
        $response = $this->service->index();
        return response()->json($response['message'], $response['status']);
    }

    public function show()
    {
        $response = $this->service->index();
        return response()->json($response['message'], $response['status']);
    }

    public function store()
    {
        $response = $this->service->index();
        return response()->json($response['message'], $response['status']);
    }

    public function update()
    {
        $response = $this->service->index();
        return response()->json($response['message'], $response['status']);
    }

    public function destroy($id)
    {
        $response = $this->service->index();
        return response()->json($response['message'], $response['status']);
    }
}
