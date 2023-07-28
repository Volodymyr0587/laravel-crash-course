<div class="inline-block m-2">
    <a href="{{ route('getPostsByCategory', $category->slug) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        {{ $category->title }}
    </a>
</div>
