<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Livewire\Component;

class Create extends Component
{
    public $saveSuccess = false;
    public $post;

    protected $rules = [
        'post.title' => 'required|min:6',
        'post.body' => 'required|min:6',
    ];

    public function mount()
    {
        $this->post = new Post;
    }

    public function savePost()
    {
        $this->validate();

        $this->post->user_id = Auth::id();
        $this->post->slug = Str::slug($this->post->title);
        $this->post->save();
        $this->saveSuccess = true;
    }

    public function render()
    {
        return view('livewire.post.create');
    }
}
