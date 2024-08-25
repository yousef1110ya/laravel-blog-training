<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;

class PostController extends Controller
{
    public function index()
    {
        $all_Posts = [
            ['id' => 1, 'title' => 'php', 'posted_by' => 'ahmad', 'created_at' => '2022-10-10 9:00:00'],
            ['id' => 2, 'title' => 'java', 'posted_by' => 'ali', 'created_at' => '2022-11-10 9:00:00'],
            ['id' => 3, 'title' => 'c++', 'posted_by' => 'mhd', 'created_at' => '2022-12-10 9:00:00'],
            ['id' => 4, 'title' => 'python', 'posted_by' => 'king', 'created_at' => '2022-13-10 9:00:00'],
        ];
        return view('Posts.index', ['posts' => $all_Posts]);
    }
    public function show()
    {
        $singlePost = [
            'id' => 1,
            'title' => 'php',
            'discreption' => 'php is a real fun language',
            'posted_by' => 'ahmad',
            'user-Email' => 'ahmad@gmail.com',
            'created_at' => '2022-10-10 9:00:00'
        ];
        return view('posts.show', ['post' => $singlePost]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        return to_route('posts.index');
    }
}