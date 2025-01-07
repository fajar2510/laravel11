<x-layout>
    <x-slot:title>{{ $title }} </x-slot:title>
  
      <article class="py-8 max-w-screen-md">
       
          <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 ">{{ $post->title }}</h2>
       
        <div class="text-base text-gray-500">
          By
          <a href="/authors/{{ $post->author->username }}" class="hover:underline text-blue-500">
            {{ $post->author->name }}</a> 
            in
          <a href="#" class="hover:underline text-blue-500">Web Programming</a> |
           <span class="text-base"> {{ $post->created_at->diffForHumans() }} </span>
          {{-- <a href="#">{{ $post['author'] }}</a> | {{ $post->created_at->format('j, F, Y') }} --}}
        </div>
        <p class="my-4 font-light text-justify leading-relaxed">{{ $post->body }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline"> &laquo; Back to posts</a>
      </article>
  
  </x-layout>