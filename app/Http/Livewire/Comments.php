<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{
    public  $comments = [
      [
          'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi blanditiis enim excepturi neque placeat quasi sed sequi tempora voluptas. Ab deserunt dolor doloribus earum nihil non nulla ratione sunt?',
          'created_at' => '3 min ago',
          'creator' => 'IBRA'
      ]
    ];
    public $newComment;
    public function addComment(){
        array_unshift($this->comments,[
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'creator' => 'Joe'
        ]);
        $this->newComment ="";
    }
    public function render()
    {
        return view('livewire.comments');
    }
}
