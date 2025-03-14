<nav class="bg-red-500">
    <div class="flex justify-between items-center max-w-screen-xl mx-auto px-4 py-3">
        <div class="flex items-center space-x-4">
            <a href="{{route('homepage.index')}}"><span class="text-white font-bold text-xl">PHAM DUONG</span></a>

        </div>
        <div class="hidden md:flex space-x-6 text-white">
            <a href="{{route('homepage.index')}}" class="hover:text-yellow-400">Trang Chủ</a>
            <a href="{{route('posts.index')}}" class="hover:text-yellow-400">Đăng tin ngay</a>
        </div>
        <button id="mobile-menu-button" class="md:hidden text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>
    <div id="mobile-menu" class="hidden md:hidden bg-red-600 p-3 space-y-2">
        <a href="{{route('homepage.index')}}" class="block text-white p-3">Trang Chủ</a>
        <a href="{{route('posts.index')}}" class="block text-white p-3">Đăng tin ngay</a>
    </div>
</nav>