<div class="mt-8 overflow-x-auto">
    <div class="relative overflow-x-auto shadow ring-1 ring-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 text-sm text-gray-700">
            <thead class="bg-gray-50 text-xs uppercase tracking-wider text-gray-600">
                <tr>
                    @foreach($headers as $header)
                    <th scope="col" class="px-4 py-3 text-left whitespace-nowrap font-semibold">
                        {{ $header }}
                    </th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 bg-white">
                @forelse ($rows as $row)
                <tr class="hover:bg-gray-50 transition">
                    @foreach($row as $column)
                    <td class="px-4 py-3 align-top text-gray-700 whitespace-nowrap">
                        {!! $column !!}
                    </td>
                    @endforeach
                </tr>
                @empty
                <tr>
                    <td colspan="{{ count($headers) }}" class="px-4 py-4 text-center text-gray-400">
                        Không có dữ liệu hiển thị
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>