<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use Carbon\Carbon;

class Comments extends Component
{
    public $comments = [
        [
            'body' => 'That’s a lot of code, so let’s break it down from top to bottom. First, we have the search field for searching for users. We want the users to be able to see the results of their query as they type.',
            'created_at' => '3 mins ago',
            'created_by' => 'vibhor'
        ]
    ];

    public $newComment;

    public function addComment()
    {
        array_unshift($this->comments, [
                'body' => $this->newComment,
                'created_at' => Carbon::now()->diffForHumans(),
                'created_by' => 'Vibhor'
            ]);
        $this->newComment = '';
    }

    public function render()
    {
        return view('livewire.post.comments');
    }
}
