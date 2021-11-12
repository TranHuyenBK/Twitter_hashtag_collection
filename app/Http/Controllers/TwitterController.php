<?php

namespace App\Http\Controllers;

use App\Http\Requests\TwitterSearchRequest;
use App\Serivces\Twitter\TwitterServiceInterface;

class TwitterController extends Controller
{
    protected $twitterService;

    public function __construct(TwitterServiceInterface $twitterService)
    {
        $this->twitterService = $twitterService;
    }

    public function index(TwitterSearchRequest $request)
    {
        $posts = $this->twitterService->search($request->validated());

        return view('twitter', compact('posts'));
    }
}
