<div>
    <h1 class="my-10 text-3xl">Comments</h1>
    <div class="flex justify-center">

        <div class="w-6/12">
            @error('newComment') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            <form class="my-6 flex" wire:submit.prevent="addComment">
                <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="What's in your mind."
                       wire:model.debounce.500ms="newComment">

                <div class="py-2">
                    <button class="p-2 bg-blue-500 w-20 rounded shadow text-white">Add</button>
                </div>
            </form>
        </div>
    </div>
    @foreach($comments as $comment)
        <div class="rounded border shadow p-3 my-2">
            <div class="flex justify-between my-2">
                <div class="flex">
                    <p class="font-bold text-lg">{{$comment->Creator->name}}</p>
                    <p class="mx-3 py-1 text-xs text-gray-500 font-semibold">
                        {{$comment->created_at->diffForHumans()}}
                    </p>
                </div>
                <i class="fas fa-times text-red-200 hover:text-red-600 cursor-pointer" wire:click="remove({{$comment->id}})"></i>
            </div>
            <p class="text-gray-800">{{$comment->body}}</p>
        </div>

    @endforeach



</div>


