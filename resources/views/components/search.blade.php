<div class="mb-4 mx-auto  md:w-[85%] lg:w-[70%]  justify-between max-w-screen-xl ">
    <form>
      
      @if (request('category')) 
      <input type="hidden" name="category" value="{{ request('category') }}">            
      @endif  
      
      @if (request('author')) 
      <input type="hidden" name="author" value="{{ request('author') }}">            
      @endif  

      <label for="search" class="mb-2 sp text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
      <div class="relative">
          <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
              <svg class="w-4 h-4  text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
              </svg>
          </div>
          <input type="search" id="search" name="search"
          class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg 
          bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 
          dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
          placeholder="Search for title or name or category article . . ." value="{{ request('search') }}" required/>
          <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
      </div>
    </form>

  <!-- Keterangan Hasil Pencarian -->
    @if (request('search') || request('author') || request('category'))
    <div class="mt-4 flex flex-col gap-2">
        @if (request('search'))
        <p class="text-gray-700 font-medium dark:text-gray-400">
            Hasil pencarian untuk: 
            <span class="font-normal italic">"{{ request('search') }}"</span>
        </p>
        @endif

        {{-- @if (request('author'))
        <p class="text-gray-700 font-medium dark:text-gray-400">
            Filter oleh username penulis: 
            <span class="font-normal italic">"{{ request('author') }}"</span>
        </p>
        @endif

        @if (request('category'))
        <p class="text-gray-700 font-medium dark:text-gray-400">
            Dalam kategori: 
            <span class="font-normal italic">"{{ request('category') }}"</span>
        </p>
        @endif --}}
    </div>
    @endif

  </div>