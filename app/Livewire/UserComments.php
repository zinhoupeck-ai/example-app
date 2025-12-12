<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class UserComments extends Component
{
    use WithPagination;
    public Post $post;
    public User $user;
    #[Rule('required|min:3|max:200')]
    public string $comment;
    public function postComment()
    {
        $this->validateOnly('comment');

        $this->post->comments()->create([
            'comment' => $this->comment,
            'user_id' => Auth::user()->id,
        ]);
        $this->reset('comment');
    }

    #[Computed()]
    public function comments(){
            return $this?->user?->comments()->latest()->paginate(5);
    }
    public function render()
    {
        return view('livewire.post-comments');
    }
}