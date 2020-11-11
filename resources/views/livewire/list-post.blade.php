<div>
    @foreach ($posts as $post)
        <div class="p-4 my-3 bg-white shadow-xl sm:rounded-lg">
            <div>
                <span class="text-xl font-bold">{{ $post->user->name }}</span>
                <span class="text-grey-600">{{ $post->created_at->diffForHumans() }}</span>
                <button wire:click="showUpdateForm({{ $post->id }})" class="p-2 bg-yellow-300 hover:bg-yellow-200 text-white rounded-md">Edit</button>
            </div>
            <div>
                @if ($updateStateId !== $post->id)
                    <span>{{ $post->body }}</span>
                @endif
                @if ($updateStateId === $post->id)
                    <textarea
                        wire:model="body"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        rows="3"
                        >
                    </textarea>
                    <button
                        wire:click="updatePost({{ $post->id }})"
                        class="px-4 py-2 bg-blue-600 text-white hover:bg-blue-400 rounded-md"
                        >Save
                    </button>
                @endif
            </div>
        </div>
    @endforeach
</div>
