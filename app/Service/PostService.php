<?php

namespace App\Service;

use App\Repository\Repository;
use Symfony\Component\HttpFoundation\Response;

class PostService extends Repository
{
    public function index()
    {
        if ($posts = $this->post()->index()) {
            return $this->response($posts, Response::HTTP_OK);
        }
        return $this->response(['message' => 'Empty posts'], Response::HTTP_OK);
    }

    public function show()
    {
        $response = $this->post()->index();
        return response()->json($response['message'], $response['status']);
    }

    public function store()
    {
        $response = $this->post()->index();
        return response()->json($response['message'], $response['status']);
    }

    public function update()
    {
        $response = $this->post()->index();
        return response()->json($response['message'], $response['status']);
    }

    public function destroy()
    {
        $posts = $this->post()->index();
        return response()->json($response['message'], $response['status']);
    }
}
