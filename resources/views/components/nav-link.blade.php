@props(['active' => false])

<a {{ $attributes }} 
    class="{{ $active ? ' bg-white text-gray-900 ' : 'text-gray-300 hover:bg-gray-500 hover:text-white' }} 
    block sm:inline-block rounded-md px-3 py-2 text-sm font-medium" 
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}
</a>

