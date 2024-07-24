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

    public function index($blog_id)
    {
        return $this->model->with(['blog'])->where('blog_id', $blog_id)->paginate(10);
    }

    public function show($id)
    {
        return $this->model->with('blog')->where('id', $id)->first();
    }

    public function store($post_id)
    {
        return $this->model->create(['post_id' => $post_id, 'likes' => 0]);
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
