@props(['label', 'name' => 'images'])

<div class="mb-5">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
    <input type="file" name="{{ $name }}[]" class="mt-2 p-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full" multiple>
</div>