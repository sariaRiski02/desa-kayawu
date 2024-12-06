@extends('app.app')

@section('title', 'Register')

@section('content')

    <div class="flex items-center justify-center min-h-screen bg-base-200">
        <div class="card w-full max-w-sm shadow-xl bg-base-100">
            <div class="card-body">
                <h2 class="text-center text-2xl font-bold">Register</h2>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Name</span>
                        </label>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Your Name" class="input input-bordered" required />
                        @error('name')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-control mt-4">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" class="input input-bordered" required />
                        @error('email')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Password</span>
                            </label>
                            <div class="relative">
                                <input type="password" id="password" name="password" placeholder="••••••••" class="input input-bordered w-full" required />
                                <button type="button" onclick="toggleVisibility('password')" class="absolute inset-y-0 right-2 flex items-center text-sm">
                                    👁️
                                </button>
                            </div>
                            @error('password')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Confirm Password</span>
                            </label>
                            <div class="relative">
                                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="••••••••" class="input input-bordered w-full" required />
                                <button type="button" onclick="toggleVisibility('password_confirmation')" class="absolute inset-y-0 right-2 flex items-center text-sm">
                                    👁️
                                </button>
                            </div>
                            @error('password_confirmation')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-control mt-4">
                        <label class="label">
                            <span class="label-text">Registration Code</span>
                        </label>
                        <input type="text" name="registration_code" value="{{ old('registration_code') }}" placeholder="Enter Registration Code" class="input input-bordered" required />
                        @error('registration_code')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-control mt-4 text-center">
                        <span>Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-500">Login</a></span>
                    </div>
                    <div class="form-control mt-4">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    

      {{-- nontifikasi --}}
      @if (session('error'))
      <div role="alert" class="fixed m-5 w-auto alert alert-error">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 shrink-0 stroke-current"
            fill="none"
            viewBox="0 0 24 24">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <span>{{ session('error') }}</span>
          <button id="close">
              X
          </button>
      </div>
      @endif
  
  
      @if (session('success'))
      <div role="alert" class="fixed m-5 w-auto alert alert-success">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 shrink-0 stroke-current"
            fill="none"
            viewBox="0 0 24 24">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <span>{{ session('success') }}</span>
          <button id="close">
              X
          </button>
      </div>
      @endif

    <script>
        function toggleVisibility(fieldId) {
            const field = document.getElementById(fieldId);
            const type = field.type === 'password' ? 'text' : 'password';
            field.type = type;
        }
    </script>

@endsection
