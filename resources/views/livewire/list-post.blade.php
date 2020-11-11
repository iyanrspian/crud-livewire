<div>
    @foreach ($posts as $post)
        <div class="p-4 my-3 bg-white shadow-xl sm:rounded-lg">
            <div>
                <span class="text-xl font-bold">{{ $post->user->name }}</span>
                <span class="text-grey-600">{{ $post->created_at->diffForHumans() }}</span>
            </div>
            <span>{{ $post->body }}</span>
        </div>
    @endforeach
</div>
