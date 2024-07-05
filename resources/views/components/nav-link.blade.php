<a {{ $attributes }}
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md text-sm font-medium px-3 py-2"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
