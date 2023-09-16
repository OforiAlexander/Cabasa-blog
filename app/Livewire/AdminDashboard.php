<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class AdminDashboard extends Component
{
    use WithPagination;
    public function render()
    {
        $posts = Post::latest()->paginate(6);
        return view('livewire.admin-dashboard',[
            'posts' => $posts
        ]);
    }
}
