<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    public $search;
    public function render()
    {
        $posts = Post::latest()->simplePaginate(3);
        return view('livewire.post-list',[
            'posts' => $posts
        ]);
    }
}
