<?php


namespace App\Repository\Queries;


use App\Models\Like;

class LikeQueries
{
    private $model;

    public function __construct()
    {
        $this->model = new Like();
    }

    public function show($post_id)
    {
        return $this->model->where('post_id', $post_id)->first();
    }

    public function like ($request)
    {
        return $this->model->where('post_id', $request->post_id)->update(['likes' => $this->show($request->post_id)->like + 1]);
    }

    public function unlike ($request)
    {
        return $this->model->where('post_id', $request->post_id)->update(['likes' => $this->show($request->post_id)->like - 1]);
    }
}
