<header class="bg-white shadow-md p-4">
    <div class="flex items-center justify-between max-w-screen-xl mx-auto">
        <div class="flex items-center space-x-2">
            <a href="/">
                <img src="{{ asset('storage/images/logo1.png') }}" alt="" class="w-20">
            </a>
        </div>
        <div class="flex-1 mx-4 relative">
            <input type="text" placeholder="Xin chào, hôm nay bạn cần tìm gì?"
                class="w-full p-2 pl-12 pr-4 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500" />
            <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                viewBox="0 0 16 16">
                <path
                    d="M11.742 10.342a6.5 6.5 0 1 0-1.398 1.398l3.5 3.5a1 1 0 0 0 1.415-1.415l-3.5-3.5zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg>
        </div>
        <div class="flex items-center space-x-6">
            <a href="{{route('posts.index')}}">
                <button
                    class="text-sm text-orange-600 bg-white px-4 py-2 rounded-lg border border-orange-500 hover:bg-orange-50">
                    Đăng tin
                </button>
            </a>
        </div>
    </div>
</header>