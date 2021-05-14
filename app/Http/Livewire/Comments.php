<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comments extends Component
{
    public  $comments   ;
    public $newComment;

    public function mount(){
        $allComments = \App\Model\comments::latest()->get();
        $this->comments = $allComments;
    }

    public function addComment(){
         if($this->newComment =="") return;
       $addNewComments=\App\Model\comments::create([
           'user_id'=>1,
           'body'=>$this->newComment
       ]);
       //push the new comment to array comments
       $this->comments->prepend($addNewComments);
       $this->newComment ="";

    }
    public function render()
    {
        return view('livewire.comments');
    }
}
