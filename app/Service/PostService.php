<?php

namespace App\Service;

use App\Repository\Repository;
use Symfony\Component\HttpFoundation\Response;

class PostService extends Repository
{
    public function index($blog_id)
    {
        if ($posts = $this->post()->index($blog_id)) {
            return $this->response(true, $posts, Response::HTTP_OK);
        }
        return $this->response(false, [], Response::HTTP_OK);
    }

    public function show($id)
    {
        if ($post = $this->post()->show($id)) {
            return $this->response(true, $post, Response::HTTP_OK);
        }
        return $this->response(false, [], Response::HTTP_OK);
    }

    public function store($request)
    {
        $post = $this->post()->store($request);
        if ($post && $this->like()->store($post->id)) {
            return $this->response(true, $this->post()->show($post->id), Response::HTTP_OK);
        }
        return $this->response(false, [], Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    public function update($request)
    {
        if ($post = $this->post()->update($request)) {
            return $this->response(true, $this->post()->show($request->id), Response::HTTP_OK);
        }
        return $this->response(false, [], Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    public function destroy($id)
    {
        if ($post = $this->post()->destroy($id)) {
            return $this->response(true, $this->post()->show($id), Response::HTTP_OK);
        }
        return $this->response(false, [], Response::HTTP_UNPROCESSABLE_ENTITY);
    }
}
