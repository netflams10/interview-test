<?php

namespace App\Http\Controllers;

use App\Http\Requests\Blog\BlogCreateRequest;
use App\Service\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $service;

    public function __construct(BlogService $service)
    {
        $this->service = $service;
    }
    public function index()
    {
        $response = $this->service->index();
        return response()->json($response['message'], $response['status']);
    }

    public function show($id)
    {
        $response = $this->service->show($id);
        return response()->json($response['message'], $response['status']);
    }

    public function store(BlogCreateRequest $request)
    {
        $response = $this->service->store($request);
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
