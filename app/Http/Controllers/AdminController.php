<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index() {

        $postCount = Post::count();
        $categorieCount = Category::count();
        $commentsCount = Comment::count();


        return view('admin/index', compact('postCount', 'categorieCount', 'commentsCount'));
    }
}
