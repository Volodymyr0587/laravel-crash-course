@extends('layouts.main-layout')

@section('title', 'My Blog')

@section('content')

{{-- Categories --}}
<div class="p-4">
    @foreach ($categories as $category)
        <x-category :category="$category" />
    @endforeach
</div>

    <div class="w-3/4 ml-10">

        <h1 class="mt-5 mb-4 text-center text-lg">{{ $post->title }}</h1>
        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold  py-2 px-4 rounded">Back</a>
        <article class="p-4">
            {!! $post->body !!}
        </article>
        <p>{{ $post->created_at }}</p>
    </div>

@endsection
