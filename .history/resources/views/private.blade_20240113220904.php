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
    <div class="grid grid-cols-12">
        <div class="col-span-3 z-50">
            <div class="drawer lg:drawer-open sticky sticky-top top-0">
                <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content flex flex-col pt-3 items-center justify-center md:relative absolute top-4 left-4">
                    <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Menu</label>

                </div>
                <div class="drawer-side">
                    <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
                    <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content space-y-3">
                        <li class="mb-4">
                            <a href="/" class="flex items-center gap-x-3">
                                <img class="w-8" src="/assets/images/LOGO.png" alt="Logo HWLawyer">
                                <span class="text-xl font-bold">HW Lawyer</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-x-4" href="/private/dashboard">
                                <iconify-icon icon="solar:home-2-broken" class="text-2xl"></iconify-icon>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-x-4" href="/private/news">
                                <iconify-icon icon="fluent:news-20-regular" class="text-2xl"></iconify-icon>
                                <span>Update Informasi</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-x-4" href="/private/practices">
                                <iconify-icon icon="fluent-mdl2:work" class="text-2xl"></iconify-icon>
                                <span>Area Praktik</span>
                            </a>
                        </li>
                        <li>
                            <a class="flex items-center gap-x-4" href="/private/galleries">
                                <iconify-icon icon="solar:gallery-wide-bold" class="text-2xl"></iconify-icon>
                                <span>Galeri</span>
                            </a>
                        </li>
                        <li>
                            <a href="/private/clients" class="flex items-center gap-x-4">
                                <iconify-icon icon="tabler:users" class="text-2xl"></iconify-icon>
                                <span>Data Client</span>
                            </a>
                        </li>
                        <li>
                            <a href="/private/links" class="flex items-center gap-x-4">
                                <iconify-icon icon="teenyicons:contact-outline" class="text-2xl"></iconify-icon>
                                <span>Kontak Link</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="lg:col-span-9 col-span-12">
            <div class="w-full p-6">
                <div class="flex items-center justify-between">
                    <div class="text-2xl font-bold md:ml-0 ml-20">@yield('navbar')</div>
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" role="button" class="avatar transition-all hover:scale-95">
                            <div class="w-12 rounded-full bg-blue-900">
                                <img src="/assets/images/pak2.png" />
                            </div>
                        </label>
                        <ul tabindex="0" class="dropdown-content z-[100] menu p-2 shadow bg-base-100 rounded-box w-52">
                            <li><a id="profile_link" href="#">Profil</a></li>
                            <li><button id="logout_btn" href="/logout">Logout</button></li>
                        </ul>
                    </div>
                </div>
            </div>
            @yield('content')
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
@yield('footer_script')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const ids = localStorage.getItem('ids');
    var userLink = document.getElementById('profile_link');
    userLink.href = '/private/profile/'+ids
    fetch('/private/auth/'+ids, {
        method: 'POS',
    })
    .then(response => response.json())
    .then(data => {
        if(!data.success) window.location = '/'
    })
});

document.oncontextmenu = function() {
    return false;
};

document.addEventListener('contextmenu', function(e) {
    if (e.target.tagName === 'IMG') {
        e.preventDefault();
    }
});

document.getElementById('logout_btn').addEventListener('click', function() {
    let is_check = confirm('Logout ?')
    if(is_check) {
        localStorage.removeItem('ids')
        localStorage.removeItem('token')
        window.location = '/'
    } else return false
})

</script>
</html>
