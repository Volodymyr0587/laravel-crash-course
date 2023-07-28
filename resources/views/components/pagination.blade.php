{{-- Pagination --}}
<div class="p-10 mt-auto w-full flex items-center justify-center">
    {{ $posts->links() }}
    {{-- <ul>
        <li class="inline"><a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                href="#">Previous</a></li>
        <li class="inline"><a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                href="#">1</a></li>
        <li class="inline"><a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                href="#">2</a></li>
        <li class="inline"><a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                href="#">3</a></li>
        <li class="inline"><a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                href="#">Next</a></li>
    </ul> --}}
</div>
