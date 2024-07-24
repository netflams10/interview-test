<?php


namespace App\Repository\Queries;


use App\Models\Blog;

class BlogQueries
{
    private $model;

    public function __construct()
    {
        $this->model = new Blog();
    }

    public function index()
    {
        return $this->model->paginate(10);
    }

    public function show($id)
    {
        return $this->model->where('id', $id)->first();
    }

    public function store($request)
    {
        return $this->model->create($request);
    }
}
