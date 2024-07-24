<?php

namespace App\Service;

use App\Repository\Repository;
use Symfony\Component\HttpFoundation\Response;

class LikeService extends Repository
{
    public function like_action($request, $action)
    {
        if ($action == 'like' && $this->like()->like($request)) {
            return $this->response(true, $this->like()->show($request->post_id), Response::HTTP_OK);
        }
        else if ($action == 'unlike' && $this->like()->unlike($request)) {
            return $this->response(true, $this->like()->show($request->post_id), Response::HTTP_OK);
        }
        return $this->response(false, "Trying to like not existing post", Response::HTTP_UNPROCESSABLE_ENTITY);
    }
}
