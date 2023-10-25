@extends('public')

@section('title', 'Login Admin - HW Lawyer')

@section('header')
<script type="module" src="/assets/js/custom/login.js"></script>
@endsection

@section('content')
<div class="min-h-screen w-full bg-gray-100 flex items-center justify-center">
    <div class="max-w-md w-full p-8 rounded-xl shadow bg-white">
        <div class="text-center w-full mb-6">
            <h3 class="text-xl font-bold">Login into your account</h3>
        </div>
        <form id="loginForm" class="space-y-6">
            <div class="form-control space-y-2">
                <label for="email_input">Your email address</label>
                <input id="email_input" type="email" required maxlength="20" placeholder="user@example.com" class="input input-bordered w-full" />
            </div>
            <div class="form-control space-y-2">
                <label for="password_input">Password</label>
                <span class="input-group">
                    <input id="password_input" type="password" required maxlength="50" placeholder="Type Here" class="input input-bordered w-full" />
                    <span>
                        <iconify-icon icon="solar:eye-bold-duotone" class="text-2xl"></iconify-icon>
                    </span>
                </span>
            </div>
            <button class="btn bg-blue-900 w-full text-white" type="submit">Login Now</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ids = localStorage.getItem('ids');
        if(ids != null && ids != undefined) {
            window.location = '/private'
        }
    });

    function getId(url) {
        const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
        const match = url.match(regExp);

        return (match && match[2].length === 11)
          ? match[2]
          : null;
    }
</script>

@endsection
