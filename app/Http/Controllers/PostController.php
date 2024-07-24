<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\PostCreateRequest;
use App\Http\Requests\Post\PostUpdateRequest;
use App\Service\PostService;

class PostController extends Controller
{
    private $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }
    public function index()
    {
        $blog_id = request()->query('blog_id') ?? "";
        $response = $this->service->index($blog_id);
        return response()->json($response['message'], $response['status']);
    }

    public function show($id)
    {
        $response = $this->service->show($id);
        return response()->json($response['message'], $response['status']);
    }

    public function store(PostCreateRequest $request)
    {
        $response = $this->service->store($request);
        return response()->json($response['message'], $response['status']);
    }

    public function update(PostUpdateRequest $request)
    {
        $response = $this->service->update($request);
        return response()->json($response['message'], $response['status']);
    }

    public function destroy($id)
    {
        $response = $this->service->destroy($id);
        return response()->json($response['message'], $response['status']);
    }
}
