<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class AdminController extends Controller
{
    use WithPagination;

    public function index(Post $post)
    {
        return view('dashboard',[
            'posts' => $post
        ]);
    }

    public function posts()
    {
        return view('posts');
    }

    public function render()
    {
        return view('list');
    }
}
