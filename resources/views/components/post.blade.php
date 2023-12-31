<div class="p-10 mb-4">
    <div>
        <a href="{{ route('getPostsByCategory', $post->category['slug']) }}" class="text-blue-500">{{ $post->category['title'] }}</a>
    </div>
    <div>
        <p>{{ $post->title }}</p>
    </div>
    <div>
        <p>{{ $post->description }}</p>
    </div>
    <div class="mt-4">
        <a href="{{ route('getPost', [$post->category['slug'], $post->slug]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Read
            more...</a>
    </div>
</div>
