<?php


namespace App\Repository\Queries;


use App\Models\Post;

class PostQueries
{
    private $model;

    public function __construct()
    {
        $this->model = new Post;
    }

    public function index()
    {
        return $this->model->paginate(10);
    }
}
