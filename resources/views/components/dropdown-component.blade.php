<div class="relative">
    <button id="dropdown-button" class="font-bold inline-block text-base leading-6 m-0 w-full md:w-auto p-3 relative text-white bg-green-500">
        {{ $title }}
        <svg id="dropdown-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block ml-2 transition-transform transform rotate-0 md:hidden" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.293 6.293a1 1 0 011.414 0L10 9.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>
    <h4 id="dropdown-content" class="hidden md:inline-block text-base bg-white md:bg-transparent shadow-md md:shadow-none absolute md:static w-full md:w-auto left-0" style="z-index: 2;">
        @foreach ($links as $link)
            <a href="{{ $link['href'] }}" class="block md:inline-block p-3 text-black hover:text-red-500 transition-colors duration-200">{{ $link['text'] }}</a>
        @endforeach
    </h4>
</div>