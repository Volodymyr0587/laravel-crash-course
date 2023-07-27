@extends('layouts.main-layout')

@section('title', 'My Blog')

@section('content')

    {{-- Categories --}}
    <div class="p-4">
        <div class="inline">
            <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Category
                1</a>
        </div>
        <div class="inline">
            <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Category
                2</a>
        </div>
        <div class="inline">
            <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Category
                3</a>
        </div>
        <div class="inline">
            <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Category
                4</a>
        </div>
        <div class="inline">
            <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Category
                5</a>
        </div>
    </div>

    <div class="w-3/4 ml-10">

        {{-- Single post --}}
        <x-card />
        <x-card />
        <x-card />
        <x-card />
        <x-card />

    </div>

    <x-pagination />

@endsection
