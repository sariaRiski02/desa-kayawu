@extends('app.app')

@section('title', 'login')

@section('content')

<div class="flex items-center justify-center min-h-screen bg-base-200">
    <div class="card w-full max-w-sm shadow-xl bg-base-100">
        <div class="card-body">
            <h2 class="text-center text-2xl font-bold">Login</h2>
            @if(session('error'))
            
            <span class="text-red-500 text-center text-sm mt-1">{{ session('error') }}</span>
            
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Email</span>
                    </label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" class="input input-bordered" required />
                    @error('email')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-control mt-4">
                    <label class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <input type="password" name="password" placeholder="••••••••" class="input input-bordered" required />
                    @error('password')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>
                                <div class="form-control mt-4">
                    <label class="label cursor-pointer justify-between">
                        <span class="label-text">Show Password</span>
                        <input type="checkbox" class="checkbox checkbox-primary" onclick="togglePassword()" />
                    </label>
                </div>
                <div class="form-control mt-4 text-center">
                    <span>Belum terdaftar? <a href="{{ route('register') }}" class="text-primary">Daftar di sini</a></span>
                </div>
                <div class="form-control mt-4">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
            
        </div>
    </div>
</div>

    
@endsection
    
