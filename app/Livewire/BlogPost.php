<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class BlogPost extends Component
{
    use WithPagination;

    public function render()
    {
        $posts = Post::simplePaginate(3);
        return view('livewire.blog-post',[
            'posts' => $posts
        ]);
    }
}
