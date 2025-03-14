@props(['type' => 'submit', 'text' => 'Tạo bài đăng', 'icon' => '', 'href' => ''])

@if($type == 'link')
<a href="{{ $href }}" class="bg-gray-500 text-white px-4 py-2 h-12 rounded-lg shadow-md hover:bg-blue-700 transition duration-200 items-center inline-flex justify-center">
    @if($icon)
    <i class="{{ $icon }} mr-2"></i>
    @endif
    {{ $text }}
</a>
@else
<button type="{{ $type }}" class="bg-gray-500 text-white px-4 py-2 h-12 rounded-lg shadow-md hover:bg-blue-700 transition duration-200 items-center inline-flex justify-center">
    @if($icon)
    <i class="{{ $icon }} mr-2"></i>
    @endif
    {{ $text }}
</button>
@endif