@extends('public')

@section('title', 'Login Admin - HW Lawyer')

@section('content')
<div class="min-h-screen w-full bg-gray-100 flex items-center justify-center">
    <div class="max-w-md w-full p-8 rounded-xl shadow bg-white">
        <div class="text-center w-full mb-6">
            <h3 class="text-xl font-bold">Login into your account</h3>
        </div>
        <form id="loginForm" class="space-y-6">
            <div class="form-control space-y-2">
                <label for="email">Your email address</label>
                <input id="email" type="email" required maxlength="20" placeholder="user@example.com" class="input input-bordered w-full" />
            </div>
            <div class="form-control space-y-2">
                <label for="email">Password</label>
                <span class="input-group">
                    <input id="password" type="password" required maxlength="50" placeholder="Type Here" class="input input-bordered w-full" />
                    <span>
                        <iconify-icon icon="solar:eye-bold-duotone" class="text-2xl"></iconify-icon>
                    </span>
                </span>
            </div>
            <button class="btn bg-blue-900 w-full text-white" type="submit">Login Now</button>
        </form>
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

<script src="/assets/js/custom/login.js"></script>
@endsection