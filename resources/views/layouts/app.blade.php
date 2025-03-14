<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Đây là trang web bán nhà đất khu vực Hải Phòng">
    <meta property="og:title" content="Nhà đất Phạm Dương" />
    <meta property="og:description" content="Chuyên buôn bán, đầu tư, môi giới nhà đất tại Hải Phòng" />
    <meta property="og:image" content="{{ asset('storage/images/favicon.ico' ) }}" />
    <meta property="og:url" content="https://example.com" />
    <title>Nhà Đất Hải Phòng</title>
    <link rel="icon" href="{{ asset('storage/images/favicon.ico' ) }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <style>
        html,
        body,
        * {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-white">
    <x-contact />
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

</body>

</html>