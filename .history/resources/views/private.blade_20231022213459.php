<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.8.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/assets/css/custom.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>@yield('title')</title>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @yield('header')
</head>
<body>
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col items-center justify-center">
          <!-- Page content here -->
          <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>

        </div>
        <div class="drawer-side">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content space-y-3">
                <!-- Sidebar content here -->
                <li class="mb-4">
                    <div class="flex items-center gap-x-3">
                        <img class="w-8" src="/assets/images/LOGO.png" alt="Logo HWLawyer">
                        <span class="text-xl font-bold">HW Lawyer</span>
                    </div>
                </li>
                <li>
                    <a class="flex items-center gap-x-4" href="/private/home">
                        <iconify-icon icon="solar:home-2-broken" class="text-2xl"></iconify-icon>
                        <span>Beranda</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-x-4" href="/private/profile">
                        <iconify-icon icon="carbon:id-management" class="text-2xl"></iconify-icon>
                        <span>Manajemen Profil</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-x-4" href="/private/update">
                        <iconify-icon icon="fluent:news-20-regular" class="text-2xl"></iconify-icon>
                        <span>Update Informasi</span>
                    </a>
                </li>
                <li>
                    <a class="flex items-center gap-x-4" href="/private/client">
                        <iconify-icon icon="tabler:users" class="text-2xl"></iconify-icon>
                        <span>Data Client</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    @yield('content')
    <div class="fixed bottom-0 right-0 p-4">
        <div role="button" class="tooltip tooltip-left tooltip-success flex items-center justify-center w-16 h-16 hover:scale-105 transition-all text-white rounded-full bg-green-600" data-tip="Hubungi Kami Sekarang!">
            <iconify-icon icon="bi:whatsapp" class="text-3xl"></iconify-icon>
        </div>
    </div>
</body>
</html>
