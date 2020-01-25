<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    private $tweets = [
        [
            "author" => "hailey foss",
            "content" => "This is my 1 tweet!",
        ],
        [
            "author" => "hailey foss",
            "content" => "This is my 2 tweet!",
        ],
        [
            "author" => "hailey foss",
            "content" => "This is my 3 tweet!",
        ],
        [
            "author" => "hailey foss",
            "content" => "This is my 4 tweet!",
        ],
        [
            "author" => "hailey foss",
            "content" => "This is my 5 tweet!",
        ],

    ];

    function show() {
        return view("showTweets", ["allTweets" => $this->tweets]);
    }

    function showTweet($id) { //sizeof will give us the length of an array
        if($id > sizeof($this->tweets)) {
            //create an error view
            return view("tweetError");
        }
        return view("showTweets", ["allTweets" => [$this->tweets[$id]]]);
    }
}
