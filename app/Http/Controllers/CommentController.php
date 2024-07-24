<?php

namespace App\Http\Controllers;


use App\Http\Requests\Comment\CommentRequest;
use App\Http\Requests\Comment\CommentUpdateRequest;
use App\Service\CommentService;

class CommentController extends Controller
{
    private $service;

    public function __construct(CommentService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $post_id = request()->query('post_id') ?? "";
        $response = $this->service->index($post_id);
        return response()->json($response['message'], $response['status']);
    }

    public function show($id)
    {
        $response = $this->service->show($id);
        return response()->json($response['message'], $response['status']);
    }

    public function store(CommentRequest $request)
    {
        $response = $this->service->store($request);
        return response()->json($response['message'], $response['status']);
    }

    public function update(CommentUpdateRequest $request)
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
