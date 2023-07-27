<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex flex-col p-5 w-full h-screen">
        <h1 class="mt-4 ml-4 text-4xl text-bold">Blog</h1>

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

    </div>
</body>

</html>
