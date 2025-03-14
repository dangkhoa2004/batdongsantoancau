<div class="container mx-auto p-6">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <!-- Phần Tiêu đề -->
        <div class="form-group mb-4">
            <label for="title" class="block text-lg font-semibold text-gray-700">Tiêu đề</label>
            <input type="text" id="title" class="form-control mt-2 p-3 w-full border rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Nhập tiêu đề bài viết">
        </div>

        <!-- Phần Nội dung -->
        <div class="form-group mb-4">
            <label for="content" class="block text-lg font-semibold text-gray-700">Nội dung</label>
            <div id="content"></div> <!-- Đây là phần dùng Summernote -->
        </div>

        <!-- Phần Hashtag -->
        <div class="form-group mb-4">
            <label for="hashtag" class="block text-lg font-semibold text-gray-700">Hashtag</label>
            <input type="text" id="hashtag" class="form-control mt-2 p-3 w-full border rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Nhập hashtag (cách nhau bằng dấu phẩy)">
        </div>

        <!-- Nút Lưu bài viết -->
        <div class="flex justify-end">
            <button id="savePost" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg shadow-md">Lưu bài viết</button>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Khởi tạo Summernote cho phần Nội dung
        $('#content').summernote({
            placeholder: 'Nhập nội dung bài viết ở đây...',
            tabsize: 2,
            height: 300, // chiều cao của phần nội dung
        });

        // Sự kiện khi nhấn nút Lưu bài viết
        $('#savePost').click(function() {
            var title = $('#title').val();
            var content = $('#content').summernote('code'); // Lấy nội dung HTML từ Summernote
            var hashtag = $('#hashtag').val();

            // Hiển thị dữ liệu (Có thể thay thế bằng logic lưu vào server)
            alert('Tiêu đề: ' + title + '\nNội dung: ' + content + '\nHashtag: ' + hashtag);
        });
    });
</script>