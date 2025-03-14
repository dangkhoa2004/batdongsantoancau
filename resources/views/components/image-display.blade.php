@props(['label', 'src' => null])

<div class="mb-5">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>

    @if($src && is_array($src))
    <div class="flex flex-wrap">
        @foreach($src as $image)
        <img src="{{ asset('storage/' . $image) }}" class="w-16 md:w-32 w-full h-auto rounded-l mr-2 mb-2" alt="IMG" loading="lazy">
        @endforeach
    </div>
    @elseif($src)
    <img src="{{ asset('storage/' . $src) }}" class="w-16 md:w-32 w-full h-auto rounded-l" alt="IMG" loading="lazy">
    @else
    <p class="text-sm text-gray-500">Chưa có ảnh</p>
    @endif
</div>