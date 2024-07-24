<?php

namespace App\Service;

use App\Repository\Repository;
use Symfony\Component\HttpFoundation\Response;

class BlogService extends Repository
{
    public function index()
    {
        if ($posts = $this->blog()->index()) {
            return $this->response(true, $posts, Response::HTTP_OK);
        }
        return $this->response(false, [], Response::HTTP_OK);
    }

    public function show($id)
    {
        if ($posts = $this->blog()->show($id)) {
            return $this->response(true, $posts, Response::HTTP_OK);
        }
        return $this->response(false, [], Response::HTTP_OK);
    }

    public function store($request)
    {
        if ($posts = $this->blog()->store($request)) {
            return $this->response(true, $posts, Response::HTTP_OK);
        }
        return $this->response(false, [], Response::HTTP_OK);
    }

    public function update($request)
    {
        if ($posts = $this->blog()->update($request)) {
            return $this->response(true, $this->blog()->show($request->id), Response::HTTP_OK);
        }
        return $this->response(false, [], Response::HTTP_OK);
    }

    public function destroy($id)
    {
        if ($posts = $this->blog()->destroy($id)) {
            return $this->response(true, $this->blog()->show($id), Response::HTTP_OK);
        }
        return $this->response(false, [], Response::HTTP_OK);
    }
}
