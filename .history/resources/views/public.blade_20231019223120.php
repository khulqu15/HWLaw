<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.8.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/assets/css/custom.css">
    <link rel="shortcut icon" href="assets/images/banner/icon/01.png" type="image/x-icon">
    <title>@yield('title')</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    @yield('content')
    <div class="fixed bottom-0 right-0 p-4">
        <div role="link" class="flex items-center justify-center w-16 h-16 hover:scale-105 transition-all text-white rounded-full bg-green-600">
            <iconify-icon icon="bi:whatsapp" class="text-3xl"></iconify-icon>
        </div>
    </div>
</body>
</html>
