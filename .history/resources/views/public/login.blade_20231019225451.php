@extends('public')

@section('title', 'Login Admin - HW Lawyer')

@section('content')
<div class="min-h-screen w-full bg-gray-100 flex items-center justify-center">
    <div class="max-w-md w-full p-6 rounded-xl border">
        <div class="text-center w-full mb-6">
            <h3 class="text-xl font-bold">Login into your account</h3>
        </div>
        <form action="" method="POST" class="space-y-4">
            <div class="form-control">
                <label for="email">Your email address</label>
                <input type="email" required maxlength="20" placeholder="user@example.com" class="input input-bordered w-full" />
            </div>
            <div class="form-control">
                <label for="email">Password</label>
                <input type="password" required maxlength="50" placeholder="Type Here" class="input input-bordered w-full" />
            </div>
        </form>
    </div>
</div>
@endsection
