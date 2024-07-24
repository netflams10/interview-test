<?php

namespace App\Service;

use App\Repository\Repository;
use Symfony\Component\HttpFoundation\Response;

class CommentService extends Repository
{
    public function index($post_id)
    {
        if ($posts = $this->comment()->index($post_id)) {
            return $this->response(true, $posts, Response::HTTP_OK);
        }
        return $this->response(false, [], Response::HTTP_OK);
    }

    public function show($id)
    {
        if ($posts = $this->comment()->show($id)) {
            return $this->response(true, $posts, Response::HTTP_OK);
        }
        return $this->response(false, [], Response::HTTP_OK);
    }

    public function store($request)
    {
        if ($posts = $this->comment()->store($request)) {
            return $this->response(true, $posts, Response::HTTP_OK);
        }
        return $this->response(false, [], Response::HTTP_OK);
    }

    public function update($request)
    {
        if ($posts = $this->comment()->update($request)) {
            return $this->response(true, $this->comment()->show($request->id), Response::HTTP_OK);
        }
        return $this->response(false, [], Response::HTTP_OK);
    }

    public function destroy($id)
    {
        if ($posts = $this->comment()->destroy($id)) {
            return $this->response(true, $this->blog()->show($id), Response::HTTP_OK);
        }
        return $this->response(false, [], Response::HTTP_OK);
    }
}
