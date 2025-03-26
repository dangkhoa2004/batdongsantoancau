@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Tạo Mới Bài Đăng</h1>
    <form id="postForm" action="{{ route('posts.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6 space-y-4" enctype="multipart/form-data">
        @csrf
        <!-- Phần Hình ảnh -->
        <x-image-upload label="Hình ảnh" :src="null" name="images" />
        <!-- Phần Tiêu đề -->
        <div class="form-group mb-4">
            <label for="title" class="block text-lg font-semibold text-gray-700">Tiêu đề</label>
            <input type="text" id="title" name="title" class="form-control mt-2 p-3 w-full border rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Nhập tiêu đề bài viết" required>
        </div>
        <!-- Phần Nội dung -->
        <div class="form-group mb-4">
            <label for="content" class="block text-lg font-semibold text-gray-700">Nội dung</label>
            <textarea id="content" name="content"></textarea> <!-- Chỉnh lại thành textarea để Summernote hoạt động đúng -->
        </div>
        <!-- Phần Hashtag -->
        <div class="form-group mb-4">
            <label for="hashtag" class="block text-lg font-semibold text-gray-700">Hashtag</label>
            <input type="text" id="hashtag" name="hashtag" class="form-control mt-2 p-3 w-full border rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Nhập hashtag (cách nhau bằng dấu phẩy)">
        </div>
        <div class="mt-6">
            <x-primary-button type="submit" text="Tạo bài đăng" />
            <x-secondary-button
                :type="'link'"
                :text="'Trở về'"
                :icon="''"
                :href="route('posts.index')" />
        </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#content').summernote({
            placeholder: 'Nhập nội dung bài viết ở đây...',
            tabsize: 2,
            height: 300, // chiều cao của phần nội dung
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']], // Chữ đậm, nghiêng, gạch chân
                ['para', ['ul', 'ol', 'paragraph']] // Danh sách
            ],
            disableDragAndDrop: true // Tắt chức năng kéo thả file
        });

        $('#postForm').submit(function(e) {
            var content = $('#content').summernote('code'); // Lấy nội dung từ Summernote
            if (content.trim() === '') {
                e.preventDefault(); // Ngăn chặn submit nếu nội dung rỗng
                alert('Vui lòng nhập nội dung bài viết.');
            }
        });
    });
</script>

@endsection