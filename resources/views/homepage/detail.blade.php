@extends('layouts.app')

@section('content')
<div class="max-w-screen-xl mx-auto px-4 py-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-4 mt-4">
        <div class="lg:col-span-8 md:col-span-12 bg-white flex flex-col h-auto lg:h-full">
            <x-image-slider :images="$post->images" />
            <x-listing-title-detail :title="$post->title" />
            <x-listing-price :price="$post->price" />
            <div class="bg-white shadow-2xl rounded-lg mt-6 p-6">
                <p class="text-2xl font-semibold text-gray-900 mb-4">Thông tin cơ bản về đất</p>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <x-listing-item icon="fas fa-id-badge" label="Mã tin" :value="$post->code" />
                    <x-listing-item icon="fas fa-info-circle" label="Thông tin" :value="$post->info" />
                    <x-listing-item icon="fas fa-map-marker-alt" label="Nơi đăng" :value="$post->location" />
                    <x-listing-item icon="fas fa-certificate" label="Loại giấy tờ" :value="$post->document_type" />
                    <x-listing-item icon="fas fa-ruler-combined" label="Diện tích MB" :value="$post->area_mb . ' m²'" />
                    <x-listing-item icon="fas fa-cogs" label="Diện tích SD" :value="$post->area_sd" />
                    <x-listing-item icon="fas fa-expand-arrows-alt" label="Chiều rộng" :value="$post->width . ' m'" />
                    <x-listing-item icon="fas fa-expand-arrows-alt" label="Chiều dài" :value="$post->length . ' m'" />
                    <x-listing-item icon="fas fa-building" label="Số tầng" :value="$post->floors . ' tầng'" />
                    <x-listing-item icon="fas fa-bed" label="Phòng ngủ" :value="$post->bedrooms . ' phòng'" />
                    <x-listing-item icon="fas fa-toilet" label="Phòng toilet" :value="$post->bathrooms . ' phòng'" />
                    <x-listing-item icon="fas fa-arrow-alt-circle-up" label="Hướng" :value="$post->direction" />
                    <x-listing-item icon="fas fa-compass" label="Hướng phong thủy" :value="$post->feng_shui_direction" />
                    <x-listing-item icon="fas fa-calendar-alt" label="Thời gian đăng" :value="$post->posted_at" />
                </div>
            </div>
            <x-google-map :src="'https://www.google.com/maps/embed?pb='.$post->link" />
        </div>
        <div class="lg:col-span-2 md:col-span-6 bg-gray-100 flex flex-col">
        </div>
    </div>
</div>
@endsection