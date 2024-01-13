<!DOCTYPE html>
<html data-theme="light" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.8.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/assets/css/custom.css">
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
    <title>@yield('title')</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @yield('header')
</head>
<body>
    @yield('content')
    @foreach ($contact as $item)
        @if($item->name == 'whatsapp')
        <div class="fixed bottom-0 right-0 p-4">
            <a target="_BLANK" href="https://wa.me/{{ $item->link }}?text=Saya%20membutuhkan%20bantuan%20hukum.%20Bisakah%20kita%20berbicara?" role="button" class="tooltip tooltip-left tooltip-success flex items-center justify-center w-16 h-16 hover:scale-105 transition-all text-white rounded-full bg-green-600" data-tip="Hubungi Kami Sekarang!">
                <iconify-icon icon="bi:whatsapp" class="text-3xl"></iconify-icon>
            </a>
        </div>
        @endif
    @endforeach
    <div class="toast toast-top toast-end">
        <div class="alert alert-success px-4 hidden">
            <iconify-icon icon="mingcute:check-fill"></iconify-icon>
            <span>Toast for success</span>
        </div>
        <div class="alert alert-danger bg-red-500 text-white px-4 hidden">
            <iconify-icon icon="icon-park-solid:error"></iconify-icon>
            <span>Toast for error</span>
        </div>
    </div>

</body>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const videoElements = document.querySelectorAll('.youtube-video');
    videoElements.forEach(function(element) {
        const url = element.getAttribute('data-url');
        const videoId = getId(url);
        if (videoId) {
            const iframeMarkup = '<iframe class="w-full" height="240" src="//www.youtube.com/embed/'
                + videoId + '" frameborder="0" allowfullscreen></iframe>';
            element.innerHTML = iframeMarkup;
        }
    });
});

document.oncontextmenu = function() {
    return false;
};

function getId(url) {
    const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
    const match = url.match(regExp);

    return (match && match[2].length === 11)
      ? match[2]
      : null;
}

document.addEventListener('contextmenu', function(e) {
    if (e.target.tagName === 'IMG') {
        e.preventDefault();
    }
});
</script>
</html>
