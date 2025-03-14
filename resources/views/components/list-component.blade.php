<div class="bg-gray-100 flex flex-col h-auto">
    <span class="font-bold block p-3 text-white bg-green-500">
        {{ $title }}
    </span>
    <div class="p-3 bg-gray-100">
        <ul class="space-y-4">
            @foreach ($items as $item)
                <li class="border-b pb-4">
                    <p class="font-semibold text-black">{{ $item }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</div>