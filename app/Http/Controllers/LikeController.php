<?php

namespace App\Http\Controllers;

use App\Http\Requests\Like\LikeRequest;
use App\Service\LikeService;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    private $service;

    public function __construct(LikeService $service)
    {
        $this->service = $service;
    }

    public function like(LikeRequest $request)
    {
        $response = $this->service->like_action($request, 'like');
        return response()->json($response['message'], $response['status']);
    }

    public function unlike(LikeRequest $request)
    {
        $response = $this->service->like_action($request, 'unlike');
        return response()->json($response['message'], $response['status']);
    }
}
