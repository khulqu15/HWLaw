<!DOCTYPE html>
<html lang="en">
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
    <div class="fixed bottom-0 right-0 p-4">
        <div role="button" class="tooltip tooltip-left tooltip-success flex items-center justify-center w-16 h-16 hover:scale-105 transition-all text-white rounded-full bg-green-600" data-tip="Hubungi Kami Sekarang!">
            <iconify-icon icon="bi:whatsapp" class="text-3xl"></iconify-icon>
        </div>
    </div>
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
document.addEventListener("DOMContentLoaded", function() {
    let youtubeVideos = document.querySelectorAll('.youtube-video');

    youtubeVideos.forEach(video => {
        let url = video.getAttribute('data-url');
        let videoId = extractVideoId(url);

        if (videoId) {
            let iframe = document.createElement('iframe');
            iframe.width = "560";
            iframe.height = "315";
            iframe.src = "videoId;
            iframe.frameBorder = "0";
            iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
            iframe.allowFullscreen = true;

            video.replaceWith(iframe);
        }
    });
});

function extractVideoId(url) {
    let videoId = null;
    let match = url.match(/v=([^&]+)/);
    if (match && match[1]) {
        videoId = match[1];
    }
    return videoId;
}

</script>
</html>
