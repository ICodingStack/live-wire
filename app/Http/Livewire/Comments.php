<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use phpDocumentor\Reflection\Types\Array_;


class Comments extends Component
{
    //comments collection
//    public  $comments   ;
    public $newComment;
    public $image;
    protected $listeners = ['fileupload' => 'handleImage'];

    public function handleImage($imageData){
        $this->image=$imageData;
    }
    //allow u to navigate to next page without reload the page
    use WithPagination;

    //auto excuited
//    public function mount(){
//        $allComments = \App\Model\comments::latest()->paginate(10);
//        $this->comments = $allComments;
//    }
    //real time validation
    public function updated($propertyName)
    {
        $this->validate([$propertyName=>'required|max:255']);
    }
    //remove comment
    public function remove($commnetId){
        $comment = \App\Model\comments::find($commnetId);
        //delete
        $comment->delete();
        //remove from $comments collection
        //$this->comments=$this->comments->except($commnetId);
        session()->flash('message', 'Post successfully deleted 😊');
    }
    public function addComment(){
         $this->validate(['newComment'=>'required|max:255']);
       $addNewComments=\App\Model\comments::create([
           'user_id'=>1,
           'body'=>$this->newComment
       ]);
       //push the new comment to array comments
      // $this->comments->prepend($addNewComments);
       $this->newComment ="";
        session()->flash('message', 'Post successfully added 😊');

    }
    public function render()
    {
        return view('livewire.comments',[
            'comments' =>\App\Model\comments::latest()->paginate(2)
        ]);
    }
}
