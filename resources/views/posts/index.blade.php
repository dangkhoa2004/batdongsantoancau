@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Danh sách bài đăng</h1>
    <x-primary-button
        :type="'link'"
        :text="'Tạo bài đăng'"
        :icon="'fas fa-plus'"
        :href="route('posts.createv2')" />
    @php
    $headers = ['Mã bài đăng', 'Ảnh', 'Tiêu đề', 'Diện tích MB', 'Diện tích SD', 'Số tầng', 'Phòng ngủ', 'Phòng toilet', 'Giá', 'Địa chỉ', 'Hướng', 'Hướng phong thủy','Thời gian đăng', 'Thao tác'];
    $rows = $posts->map(function($post) {
    $images = is_string($post->images) ? json_decode($post->images, true) : $post->images;
    $imageHtml = '';
    if ($images && is_array($images) && count($images) > 0) {
    $imageHtml = '<img src="' . asset('storage/' . $images[0]) . '" class="w-full sm:w-full md:w-full lg:w-full max-w-full max-h-full object-cover rounded-md" alt="IMG">';
    }
    $formattedPrice = number_format($post->price, 0, ',', '.') . ' VND';
    $formattedAreaMb = number_format($post->area_mb, 0, ',', '.') . ' m²';
    $formattedAreaSd = number_format($post->area_sd, 0, ',', '.') . ' m²';
    $formattedWidth = number_format($post->width, 0, ',', '.') . ' m';
    $formattedLength = number_format($post->length, 0, ',', '.') . ' m';
    $formattedFloors = number_format($post->floors, 0, ',', '.') . ' tầng';
    $formattedBedrooms = number_format($post->bedrooms, 0, ',', '.') . ' phòng';
    $formattedBathrooms = number_format($post->bathrooms, 0, ',', '.') . ' phòng';
    $formattedPostedAt = \Carbon\Carbon::parse($post->posted_at)->format('d/m/Y');
    return [
    $post->code,
    $imageHtml,
    $post->title,
    $formattedAreaMb,
    $formattedAreaSd,
    $formattedFloors,
    $formattedBedrooms,
    $formattedBathrooms,
    "<span>{$formattedPrice}</span>",
    $post->location,
    $post->direction,
    $post->feng_shui_direction,
    $formattedPostedAt,
    '<a href="' . route('posts.show', $post->id) . '" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-4">Xem</a>'
    ];
    });
    @endphp
    <x-table :headers="$headers" :rows="$rows" />
</div>
@endsection