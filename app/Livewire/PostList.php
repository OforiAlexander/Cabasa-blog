<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

use function Laravel\Prompts\search;

class PostList extends Component
{
    use WithPagination;

    public $search;
    public function render()
    {

        $posts = Post::where('title', 'like', '%'. $this->search .'%')
        ->latest()->simplePaginate(3);
        return view('livewire.post-list', [
            'posts' => $posts
        ]);
    }
}
