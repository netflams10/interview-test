<?php

namespace App\Repository;


abstract class Repository
{
    public function blog ()
    {
        return new \App\Repository\Queries\BlogQueries();
    }

    public function post()
    {
        return new \App\Repository\Queries\PostQueries();
    }

    public function like()
    {
        return new \App\Repository\Queries\PostLike();
    }

    public function response($message, $data, $status)
    {
        return ['message' => ['message' => $message, 'data' => $data], 'status' => $status];
    }
}
