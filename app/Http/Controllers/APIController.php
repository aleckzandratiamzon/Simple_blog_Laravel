<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class APIController extends Controller
{
    public function index(){
        $posts = [
            [
                'id'=> 1,
                'title' => 'Man must explore, and this is exploration at its greatest',
                'sub-title' => 'Problems look mighty small from 150 miles up',
                'author' => 'Jane Doe',
                'date' => 'July 8, 2023',
            ],
            [
                'id'=> 2,
                'title' => "I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.",
                'author' => 'John Doe',
                'date' => 'August 24, 2023',
            ],
            [
                'id'=> 3,
                'title' => 'Science has not yet mastered prophecy',
                'sub-title' => 'We redict too much for the next year and yet far too little for the next ten.',
                'author' => 'Peter Druck',
                'date' => 'September 20, 2024',
            ],
            [
                'id'=> 4,
                'title' => 'Failure is not an option',
                'sub-title' => 'Many psay exploration is part of our destiny, but it’s actually our duty to future generations.',
                'author' => 'Aleck Hehe',
                'date' => 'June 28, 2025',
            ],
        ];

        return view('welcome', compact('posts'));
        // return view("welcome");
    }
    public function show($id)
    {
        $id = (int)$id;  // Ensure the id is treated as an integer
        $posts = [
            [
                'id'=> 1,
                'title' => 'Man must explore, and this is exploration at its greatest',
                'sub-title' => 'Problems look mighty small from 150 miles up',
                'author' => 'Jane Doe',
                'date' => 'July 8, 2023',
                'photo'=> 'post-bg,jpg'
            ],
            [
                'id'=> 2,
                'title' => "I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.",
                'author' => 'John Doe',
                'date' => 'August 24, 2023',
            ],
            [
                'id'=> 3,
                'title' => 'Science has not yet mastered prophecy',
                'sub-title' => 'We predict too much for the next year and yet far too little for the next ten.',
                'author' => 'Peter Druck',
                'date' => 'September 20, 2024',
            ],
            [
                'id'=> 4,
                'title' => 'Failure is not an option',
                'sub-title' => 'Many psay exploration is part of our destiny, but it’s actually our duty to future generations.',
                'author' => 'Aleck Hehe',
                'date' => 'June 28, 2025',
            ],
        ];

        // $post = collect($posts)->firstWhere('id', $id); 
        $post = Arr::first($posts, function ($value) use ($id) {
            return $value['id'] === $id;
        });
        if (!$post) {
            abort(404); 
        }

        return view('post', compact('post'));
    //    return view('post');
    }
}
