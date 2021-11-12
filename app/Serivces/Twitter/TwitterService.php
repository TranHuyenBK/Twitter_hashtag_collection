<?php

namespace App\Serivces\Twitter;

use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterService implements TwitterServiceInterface
{
    protected $twitterClient;

    public function __construct(TwitterOAuth $twitterClient)
    {
        $this->twitterClient = $twitterClient;
    }


    public function search($query = [])
    {
        return $this->twitterClient->get('search/tweets', $query);
    }
}
