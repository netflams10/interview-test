<?php


namespace App\Repository\Queries;


use App\Models\Comment;

class CommentQueries
{
    private $model;

    public function __construct()
    {
        $this->model = new Comment();
    }

    public function index($post_id)
    {
        return $this->model->where('post_id', $post_id)->paginate(10);
    }

    public function show($id)
    {
        return $this->model->with('post')->where('id', $id)->first();
    }

    public function store($request)
    {
        return $this->model->create([
            'comment' => $request->comment, 'post_id' => $request->post_id
        ]);
    }

    public function update($request)
    {
        return $this->model->where('id', $request->id)->update([
            'comment'   => $request->comment,
        ]);
    }

    public function destroy($id)
    {
        return $this->model->where('id', $id)->delete();
    }
}
