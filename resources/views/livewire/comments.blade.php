<div>
    <div class="flex justify-center">
        <div class="w-6/12">
            <h1 class="my-1-0 text-3xl">Comments</h1>
            <div class="my-4 flex">
                <input type="text" class="w-full rounded border shadow p-2 mr-2 my-2" placeholder="What's on your mind?" 
                wire:model="newComment">
                <div class="py-2">
                    <button class="p-2 bg-blue-500 w-20 rounded shadow text-white" wire:click="addComment">Add</button>
                </div>
            </div>
            @foreach($comments as $comment)
            <div class="rounded border shadow p-3 my-2">
                <div class="flex justify-start my-2">
                    <p class="font-bold text-lg">{{$comment['author']}}</p>
                    <p class="mx-3 py-2 text-xs text-gray-500 font0-semibold">{{$comment['created_at']}}</p>
                </div>
                <p class="text-gray-800">{{$comment['body']}}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
