@extends('layouts.app')

@section('content')
<div class="max-w-screen-xl mx-auto px-4 py-6">
    <div class="font-bold text-xl leading-6 mt-0 relative">
        <x-dropdown-component title="TIN NỔI BẬT" :links="[ 
            ['href' => '/trang-chu', 'text' => 'Tin mới đăng'],
            ['href' => '#', 'text' => 'Tin V.I.P']
        ]" />
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-4 mt-4">
        <div class="lg:col-span-8 md:col-span-12 bg-white flex flex-col h-auto lg:h-full bg-gray-100">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($latestPosts as $post)
                <x-card-component
                    :id="$post->id"
                    :image_url="$post->images"
                    :price="$post->price"
                    :location="$post->location" />
                @endforeach
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dropdownButton = document.getElementById("dropdown-button");
        const dropdownContent = document.getElementById("dropdown-content");
        const dropdownIcon = document.getElementById("dropdown-icon");
        dropdownButton.addEventListener("click", function() {
            if (window.innerWidth < 1024) {
                dropdownContent.classList.toggle("hidden");
                dropdownIcon.classList.toggle("rotate-180");
            }
        });

        function checkScreenSize() {
            if (window.innerWidth >= 1024) {
                dropdownContent.classList.remove("hidden");
            } else {
                dropdownContent.classList.add("hidden");
                dropdownIcon.classList.remove("rotate-180");
            }
        }
        window.addEventListener("resize", checkScreenSize);
        checkScreenSize();
    });
</script>
@endsection