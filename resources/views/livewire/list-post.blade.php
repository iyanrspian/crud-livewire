<div>
    @foreach ($posts as $post)
        <div class="p-4 my-3 bg-white shadow-xl sm:rounded-lg">
            <div>
                <span class="text-xl font-bold">{{ $post->user->name }}</span>
                <span class="text-grey-600">{{ $post->created_at->diffForHumans() }}</span>
                <button
                    wire:click="showUpdateForm({{ $post->id }})"
                    class="py-1.5 px-3 bg-green-500 hover:bg-green-400 text-white text-sm rounded-md focus:outline-none"
                    >Ubah
                </button>
                <button
                    onclick="return confirm('Yakin hapus post nih?') || event.stopImmediatePropagation()"
                    wire:click="deletePost({{ $post->id }})"
                    class="py-1.5 px-3 bg-red-600 hover:bg-red-500 text-white text-sm rounded-md focus:outline-none"
                    >Hapus
                </button>
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
                        >Simpan
                    </button>
                @endif
            </div>
        </div>
    @endforeach
</div>
