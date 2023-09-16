<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class AllPosts extends Component
{
    #[Rule('required', message: 'Please provide a post title')]
    public $title;

    #[Rule('required', message: 'Please provide a post description')]
    public $description;

    #[Rule('required', message: 'Please provide a short but captivating post note')]
    public $excerpt;

    #[Rule('required', message: 'Hash tag you post for views')]
    public $hash_tag;

    #[Rule('required', message: 'Please provide the full content of the post. ')]
    public $body;

    public function create()
    {
        $validated = $this->validate();

        Post::create($validated);
        $this->reset('title', 'description', 'excerpt', 'hash_tag', 'body');

        session()->flash('success', 'Post Published');
    }
    public function render()
    {
        return view('livewire.all-posts');
    }
}
