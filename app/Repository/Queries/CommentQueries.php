<?php


namespace App\Repository\Queries;


use App\Models\Post;

class CommentQueries
{
    private $model;

    public function __construct()
    {
        $this->model = new Post;
    }

    public function index($blog_id)
    {
        return $this->model->with(['blog'])->where('blog_id', $blog_id)->paginate(10);
    }

    public function show($id)
    {
        return $this->model->with('blog')->where('id', $id)->first();
    }

    public function store($request)
    {
        return $this->model->create([
            'title'   => $request->title,
            'article' => $request->article,
            'blog_id' => $request->blog_id,
            'image'   => $request->image,
        ]);
    }

    public function update($request)
    {
        return $this->model->where('id', $request->id)->update([
            'title'   => $request->title,
            'article' => $request->article,
            'image'   => $request->image,
        ]);
    }

    public function destroy($id)
    {
        return $this->model->where('id', $id)->delete();
    }
}
