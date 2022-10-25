<?php

namespace App\Http\Livewire\Post;

use App\Models\User;
use Livewire\Component;

class Authors extends Component
{
    public function render()
    {
        $users = User::whereHas('posts')->with('posts')->orderBy('name')->paginate(6);
        return view('livewire.post.authors');
    }
}
