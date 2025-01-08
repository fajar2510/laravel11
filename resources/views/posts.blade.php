<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

    <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-0 lg:px-0">

      <!-- Search component -->
     <x-search></x-search>

      <!-- untuk pagination, membatasi query yang ditampilan dalam sekali muat halaman -->
      <div class="mb-3 mx-auto md:w-[85%] lg:w-[70%] justify-between max-w-screen-xl ">
        {{ $posts->links() }} 
      </div>
        
      <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

        @forelse ($posts as $post )
          <article class="flex flex-col h-full p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 hover:-translate-y-1 transition-all duration-300 ease-in-out">
              
            <div class="flex justify-between items-center mb-5 text-gray-500">
                 <a href="/posts?category={{ $post->category->slug }}">
                  <span class="bg-{{ $post->category->color }}-200 hover:underline hover:text-blue-600 hover:bg-opacity-80 
                     transition-all duration-300 ease-in-out  text-primary-800 text-xs font-medium inline-flex 
                     items-center px-2.5 py-1 rounded dark:bg-primary-200 dark:text-primary-800">
                    {{ $post->category->name }}
                  </span>
                 </a>           
                <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>            
              </div>

              <!-- judul artikel -->
              <h2 class="mb-2 text-2xl font-medium tracking-tight text-gray-900 dark:text-white text-left leading-tight">
                <a href="/posts/{{ $post->slug }}" class="hover:underline hover:text-blue-600 transition-all duration-300 ease-in-out">
                  {{ $post->title }}
                </a>
              </h2>

              <!-- isi artikel -->
              <p class="mb-5 font-light text-gray-500 dark:text-gray-400 first-letter:font-bold first-letter:text-lg text-justify leading-relaxed flex-grow">
                {{ Str::limit($post->body, 230) }}
              </p>
              
              <!-- penulis artikel -->
              <div class="flex justify-between items-center mt-auto">
                <a href="/posts?author={{ $post->author->username }}" class="hover:underline hover:text-blue-600 transition-all duration-300 ease-in-out">
                  <div class="flex items-center space-x-3">
                      <img class="w-7 h-7 rounded-full" src="https://www.gravatar.com/avatar/{{ md5(strtolower($post->author->username)) }}?s=200&d=identicon" alt="{{ $post->author->username }}" />
                      <span class="font-normal text-wrap text-slate-600 text-sm  dark:text-white">
                          {{ Str::words($post->author->name, 2, '') }}
                        </span>
                      </div>
                </a>

                <a href="/posts/{{ $post->slug }}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                      Read more
                      <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd">
                        </path>
                      </svg>
                </a>
              </div>

          </article> 
        @empty
        <div class="mt-10 flex flex-col gap-5 items-start">
          <p class="text-gray-700 font-semibold mx-4 dark:text-gray-400">😕Sorry, Article not found!</p>
          <a href="/posts" class="translate-x-5 text-blue-600 hover:underline">&laquo; Back to all posts</a>
         </div>
        @endforelse
              
      </div>  

      <div class="mt-3 mb-8 mx-auto md:w-[85%] lg:w-[70%] justify-between max-w-screen-xl ">
        {{ $posts->links() }} 
      </div>
  </div>
              
</x-layout>

