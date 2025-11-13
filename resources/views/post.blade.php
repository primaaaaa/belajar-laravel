<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
  
        <article class="py-8 max-w-3xl">
            <h2 class="mb-1 text-3xl text-center tracking-tight font-bold text-gray-800">{{ $post['title'] }}</h2>
            <div class="text-base text-center text-gray-500">
                <a href="#">{{ $post['author'] }}</a> | 1 Januari 2024
            </div>

            <p class="my-4 font-light">{{ $post['body']  }}</p>
            <a href="/posts" class="font-medium text-blue-500 hover:underline"> &laquo; Back</a>
        </article>

    

</x-layout>