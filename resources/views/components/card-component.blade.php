@props([
    'id',
    'image_url',
    'price',
    'location',
    'info',
    'area_mb',
    'area_sd',
])

@php
    $image = is_array($image_url) ? $image_url[0] : $image_url;
@endphp

<a href="{{ route('homepage.detail', ['id' => $id]) }}" class="block group">
    <div class="rounded-xl overflow-hidden bg-white shadow-sm group-hover:shadow-xl transition-all duration-300 flex flex-col">

        {{-- Phần ảnh chính --}}
        <div class="relative h-40 sm:h-48 md:h-52 lg:h-56 bg-gray-100">
            <div class="absolute top-2 left-2 flex gap-2 p-2 z-10">
                <img src="{{ asset('storage/images/hot.gif') }}" alt="Hot" class="w-[30px] h-[15px]">
                <img src="{{ asset('storage/images/new1.gif') }}" alt="New" class="w-[30px] h-[15px]">
            </div>

            <img src="{{ asset('storage/' . $image) }}"
                 alt="Ảnh bất động sản"
                 class="absolute inset-0 w-full h-full object-cover">

            <div class="absolute bottom-0 left-0 w-full bg-red-600 bg-opacity-90 text-white px-3 py-1 text-xs font-bold">
                CHỈ TỪ {{ number_format($price, 0, ',', '.') }} VNĐ - SỞ HỮU NGAY
            </div>
        </div>

        {{-- Nội dung --}}
        <div class="p-4 flex flex-col flex-grow">
            {{-- Tiêu đề --}}
            <h3 class="text-base font-semibold text-gray-800 leading-snug mb-2 line-clamp-2">
                {{ $attributes->get('title') ?? 'Tin đăng bất động sản nổi bật tại Hải Phòng' }}
            </h3>

            {{-- Thông tin chi tiết --}}
            <div class="flex flex-wrap items-center text-sm text-gray-600 gap-2 mb-2">
                <span class="text-red-600 font-bold text-base">{{ number_format($price, 0, ',', '.') }} VNĐ</span>
                @if($area_mb)<span>• {{ $area_mb }} m²</span>@endif
                @if($area_sd)<span>• {{ $area_sd }} m²</span>@endif
                <span>• {{ $location }}</span>
            </div>

            {{-- Mô tả --}}
            <p class="text-sm text-gray-500 mb-4 line-clamp-2">
                {{ $info }}
            </p>

            {{-- Người đăng & gọi điện --}}
            <div class="flex items-center justify-between mt-auto">
                <div class="flex items-center gap-2 text-sm text-gray-700">
                    <img src="/storage/images/avt.png" class="w-8 h-8 rounded-full" alt="avatar">
                    <div>
                        <p class="font-semibold">Quỳnh</p>
                        <p class="text-gray-400 text-[11px]">Đăng hôm nay</p>
                    </div>
                </div>
                <button class="bg-emerald-600 hover:bg-emerald-700 text-white px-3 py-1.5 rounded text-xs font-medium">
                    📞 0398 898 *** • Hiện số
                </button>
            </div>
        </div>
    </div>
</a>
