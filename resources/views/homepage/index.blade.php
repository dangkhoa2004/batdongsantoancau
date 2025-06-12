@extends('layouts.app')

@section('content')
<div class="max-w-screen-xl mx-auto px-4 py-6">
    <div class="font-bold text-xl leading-6 mt-0 relative">
        <div class="flex items-center gap-2 flex-wrap p-4">
            <!-- Thanh tìm kiếm -->
            <div class="w-full max-w-sm min-w-[200px]">
                <div class="relative">
                    <input
                        class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md pl-3 pr-28 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                        placeholder="Đất 100 tỷ..." />
                </div>
            </div>
            <!-- Dropdown Tỉnh -->
            <div class="relative">
                <button class="border border-gray-300 rounded px-3 py-2 text-sm flex items-center">
                    Hải Phòng
                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>

            <!-- Nút tìm kiếm -->
            <button class="bg-red-600 hover:bg-red-700 text-white rounded px-4 py-2 text-sm">
                Tìm kiếm
            </button>

            <!-- Nút xem bản đồ -->
            <button class="bg-teal-600 hover:bg-teal-700 text-black rounded px-4 py-2 text-sm flex items-center">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9 20l-5.447-2.724A2 2 0 013 15.382V5.618a2 2 0 011.553-1.947L9 1m0 0l6 2m-6-2v19m6-17l5.447 2.724A2 2 0 0121 8.618v9.764a2 2 0 01-1.553 1.947L15 23m0 0V4" />
                </svg>
                Xem bản đồ
            </button>

            <!-- Bộ lọc -->
            <div class="flex items-center border border-gray-300 rounded px-3 py-2 text-sm relative">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707L15 13.414V19a1 1 0 01-.553.894l-4 2A1 1 0 019 21v-7.586L3.293 6.707A1 1 0 013 6V4z" />
                </svg>
                Lọc
                <span class="absolute -top-2 -right-2 bg-red-600 text-white text-xs w-5 h-5 rounded-full flex items-center justify-center">1</span>
            </div>

            <!-- Các filter khác -->
            <select class="border border-gray-300 rounded px-2 py-1 text-sm">
                <option>Loại nhà đất</option>
            </select>

            <select class="border border-gray-300 rounded px-2 py-1 text-sm">
                <option>Mức giá</option>
            </select>
        </div>
        <div class="flex items-center gap-2 flex-wrap p-4">
            <label class="flex items-center border border-gray-300 rounded px-3 py-2 text-sm">
                <input type="checkbox" class="mr-2 accent-green-500">
                Tin xác thực
            </label>

            <label class="flex items-center border border-gray-300 rounded px-3 py-2 text-sm">
                <input type="checkbox" class="mr-2 accent-blue-500">
                Môi giới chuyên nghiệp
            </label>
        </div>

    </div>
    <div class="grid grid-cols-1 lg:grid-cols-10 gap-4 mt-4">
        <!-- Bên trái (70%) -->
        <div class="lg:col-span-8 flex flex-col h-auto lg:h-full">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                @foreach ($latestPosts as $post)
                <x-card-component
                    :id="$post->id"
                    :image_url="$post->images"
                    :price="$post->price"
                    :location="$post->location"
                    :info="$post->info"
                    :area_mb="$post->area_mb"
                    :area_sd="$post->area_sd"
                    :posted_at="$post->posted_at" />
                @endforeach
            </div>
        </div>
        <!-- Bên phải (30%) -->
        <div class="lg:col-span-2">
            <x-list-component title="CẦN BÁN GẤP" :items="[
            'Bán nhà số 21/116 Nguyễn Đức Cảnh, Lê Chân, Hải Phòng',
            'Bán nhà 99 Nguyễn Văn Hới, Hải An, Hải Phòng',
            'Bán nhà 74 Tiền Phong, Đằng Hải, Hải An, Hải Phòng',
            'Chuyển nhượng lô đất 1 + 2 mặt đường số 128 Tân Thông, Kiến An, Hải Phòng',
        ]" />
        </div>
    </div>

</div>
@endsection