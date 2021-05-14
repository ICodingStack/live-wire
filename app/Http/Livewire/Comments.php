<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{
    public  $comments   ;
    public $newComment;

    public function mount(){
        $allComments = \App\Model\comments::all();
        $this->comments = $allComments;
    }
    public function addComment(){
         if($this->newComment =="") return;
       \App\Model\comments::create([
           'user_id'=>1,
           'body'=>$this->newComment
       ]);
        $this->newComment ="";
        $allComments = \App\Model\comments::all();
        $this->comments = $allComments;
    }
    public function render()
    {
        return view('livewire.comments');
    }
}
