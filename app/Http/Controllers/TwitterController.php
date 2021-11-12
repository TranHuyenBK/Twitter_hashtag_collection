<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterController extends Controller
{
    /**
     * Display data from Twitter.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $connection = new TwitterOAuth(env('CONSUMER_KEY'), env('CONSUMER_SECRET'), env('ACCESS_TOKEN'), env('ACCESS_TOKEN_SECRET'));
        $result = $connection->get('search/tweets', ['q' => '#Metaverse', 'result_type'=> 'mixed']);
        $posts = [];
        
        foreach ($result->statuses as $key => $value) {
            $posts[$key]['text'] = $value->text;
            $posts[$key]['retweet_count'] = $value->retweet_count;
            $posts[$key]['retweet_count'] = $value->retweet_count;
            $posts[$key]['favorite_count'] = $value->favorite_count;
            $posts[$key]['retweet_count'] = $value->retweet_count;
            
            break;
        }
        dd($posts);

        return view('twitter');
    }
}
