@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Tạo Mới Bài Đăng</h1>
    <form id="postForm" action="{{ route('posts.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6 space-y-4" enctype="multipart/form-data">
        @csrf
        <x-image-upload label="Hình ảnh" :src="null" name="images" />
        <x-input-field label="Tiêu đề" name="title" type="text" />
        <x-area-field label="Thông tin" name="info" type="text" />
        <!-- <x-input-field label="Mã bài đăng" name="code" type="text" /> -->
        <x-input-field label="Diện tích mặt bằng" name="area_mb" type="number" />
        <x-input-field label="Diện tích sử dụng" name="area_sd" type="number" />
        <x-input-field label="Chiều rộng" name="width" type="number" />
        <x-input-field label="Chiều dài" name="length" type="number" />
        <x-input-field label="Số tầng" name="floors" type="number" />
        <x-input-field label="Phòng ngủ" name="bedrooms" type="number" />
        <x-input-field label="Phòng toilet" name="bathrooms" type="number" />
        <x-input-field label="Giá" name="price" type="number" />
        <x-area-field label="Địa chỉ" name="location" type="text" />
        <x-input-field label="Hướng" name="direction" type="text" />
        <!-- <x-input-field label="Hướng phong thủy" name="feng_shui_direction" type="text" /> -->
        <x-input-field label="Loại giấy tờ" name="document_type" type="text" />
        <!-- <x-input-field label="Liên kết" name="link" type="text" /> -->
        <div class="mt-6">
            <x-primary-button type="submit" text="Tạo bài đăng" />
            <x-secondary-button
                :type="'link'"
                :text="'Trở về'"
                :icon="''"
                :href="route('posts.index')" />
        </div>
    </form>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("postForm");

            form.addEventListener("submit", function(e) {
                const requiredFields = [
                    "title", "info", "area_sd", "area_mb", "price", "location",
                    "width", "length", "direction", "document_type"
                ];

                const numberFields = ["area_mb", "area_sd", "price", "width", "length"];

                let isValid = true;

                // Xóa lỗi cũ
                form.querySelectorAll('.error-msg').forEach(el => el.remove());
                form.querySelectorAll('input, textarea').forEach(field => {
                    field.classList.remove("border-red-500", "bg-red-50");
                });

                requiredFields.forEach(function(name) {
                    const field = form.querySelector(`[name="${name}"]`);
                    const value = field ? field.value.trim() : "";

                    if (!field || value === "") {
                        isValid = false;
                        showError(field, "Trường này là bắt buộc.");
                        return;
                    }

                    // Kiểm tra số
                    if (numberFields.includes(name)) {
                        const number = Number(value);
                        if (isNaN(number)) {
                            isValid = false;
                            showError(field, "Giá trị phải là số.");
                        } else if (number <= 0) {
                            isValid = false;
                            showError(field, "Giá trị phải lớn hơn 0.");
                        }
                    }

                    // Các validate riêng
                    if (name === "title" && value.length < 5) {
                        isValid = false;
                        showError(field, "Tiêu đề phải ít nhất 5 ký tự.");
                    }

                    if (name === "info" && value.length < 10) {
                        isValid = false;
                        showError(field, "Thông tin phải ít nhất 10 ký tự.");
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                    alert("Vui lòng sửa các lỗi trong biểu mẫu.");
                }

                function showError(field, message) {
                    if (!field) return;
                    field.classList.add("border-red-500", "bg-red-50");

                    const error = document.createElement("p");
                    error.className = "text-red-500 text-sm mt-1 error-msg";
                    error.textContent = message;
                    field.parentElement.appendChild(error);
                }
            });
        });
    </script>
</div>
@endsection