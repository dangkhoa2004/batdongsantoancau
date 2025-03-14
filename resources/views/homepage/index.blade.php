@extends('layouts.app')

@section('content')
<div class="max-w-screen-xl mx-auto px-4 py-6">
    <div class="font-bold text-xl leading-6 mt-0 relative bg-gray-100">
        <x-dropdown-component title="TIN NỔI BẬT" :links="[ 
            ['href' => '/trang-chu', 'text' => 'Tin mới đăng'],
            ['href' => '#', 'text' => 'Tin V.I.P']
        ]" />
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-4 mt-4">
        <div class="lg:col-span-8 md:col-span-12 bg-white flex flex-col h-auto lg:h-full">
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
        <div class="lg:col-span-2 md:col-span-6">
            <x-list-component title="CẦN BÁN GẤP" :items="[
                'Bán nhà số 21/116 Nguyễn Đức Cảnh, Lê Chân, Hải Phòng',
                'Bán nhà 99 Nguyễn Văn Hới, Hải An, Hải Phòng',
                'Bán nhà 74 Tiền Phong, Đằng Hải, Hải An, Hải Phòng',
                'Chuyển nhượng lô đất 1 + 2 mặt đường số 128 Tân Thông, Kiến An, Hải Phòng',
            ]" />
        </div>
        <div class="lg:col-span-2 md:col-span-6">
            <x-list-component title="TIN TỨC" :items="[
                'Tư vấn luật: Mua chung đất nhượng',
                '10 cách chống nóng, giảm nhiệt nhà trong ngày hè nóng nực',
                'Những điều cần biết khi mua nhà đang thế chấp tại ngân hàng',
                'Tư vấn luật: Cách nào tránh rủi ro khi mua đất đang thế chấp ngân hàng?',
            ]" />
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