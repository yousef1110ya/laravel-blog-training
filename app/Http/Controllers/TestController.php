<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;

class TestController extends Controller
{
    public function testAction()
    {
        $all_Posts = [
            ['id' => 1 , 'title' => 'php', 'posted_by' => 'ahmad', 'created_at' =>'2022-10-10 9:00:00'],
            ['id' => 2 , 'title' => 'java', 'posted_by' => 'ali', 'created_at' =>'2022-11-10 9:00:00'],
            ['id' => 3 , 'title' => 'c++', 'posted_by' => 'mhd', 'created_at' =>'2022-12-10 9:00:00'],
            ['id' => 4 , 'title' => 'python', 'posted_by' => 'king', 'created_at' =>'2022-13-10 9:00:00'],
        ];
        return view('Test' , ['posts' => $all_Posts ]);
    }
}