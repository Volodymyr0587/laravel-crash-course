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

        {{-- Single post --}}
        @foreach ($posts as $post)
            <x-post :post="$post" />
        @endforeach

    </div>

    <x-pagination />

@endsection
