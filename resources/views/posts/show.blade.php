@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Chi tiết bài đăng</h1>
    <form class="bg-white shadow-md rounded-lg p-6 space-y-4">
        <x-image-display label="Ảnh bài đăng" :src="$post->images" />
        <x-input-field label="Tiêu đề" :value="$post->title" disabled />
        <x-input-field label="Mã bài đăng" :value="$post->code" disabled />
        <x-input-field label="Diện tích mặt bằng" :value="$post->area_mb . ' m²'" disabled />
        <x-input-field label="Diện tích sử dụng" :value="$post->area_sd . ' m²'" disabled />
        <x-input-field label="Số tầng" :value="$post->floors" disabled />
        <x-input-field label="Phòng ngủ" :value="$post->bedrooms" disabled />
        <x-input-field label="Phòng toilet" :value="$post->bathrooms" disabled />
        <x-input-field label="Giá" :value="number_format($post->price, 0, ',', '.') . ' VND'" disabled />
        <x-input-field label="Địa chỉ" :value="$post->location" disabled />
        <x-input-field label="Hướng" :value="$post->direction" disabled />
        <x-input-field label="Hướng phong thủy" :value="$post->feng_shui_direction" disabled />
        <div class="mt-6">
            <x-primary-button type="submit" text="Lưu" />
            <x-secondary-button
                :type="'link'"
                :text="'Trở về'"
                :icon="''"
                :href="route('posts.index')" />
        </div>
    </form>
</div>
@endsection