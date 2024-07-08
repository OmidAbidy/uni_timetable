<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('frontend/styles/login.css') }}" />
    <title>Login</title>
  </head>
  <body>



    <!-- Session Status -->
    @if (session('status'))
      <div class="mb-4">
          {{ session('status') }}
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="logo"
                    style="display: flex;
                    margin:0 auto;
                    "><img src="{{asset ('frontend/images/logo3.png')}}" alt="" 
                    height="100px"
                    width="100px"/></div>
      <h1>Login</h1>

      <!-- Email Address -->
      <input type="email" id="email" name="email" placeholder="User Name" value="{{ old('email') }}" required autofocus autocomplete="username" />
      @error('email')
        <div class="mt-2">{{ $message }}</div>
      @enderror

      <!-- Password -->
      <input type="password" id="password" name="password" placeholder="Password" required autocomplete="current-password" />
      @error('password')
        <div class="mt-2">{{ $message }}</div>
      @enderror

      <!-- Remember Me -->
      <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
          <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
          <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
      </div>

      <input type="submit" value="Login" id="submit-btn" />

      @if (Route::has('password.request'))
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
          {{ __('Forgot your password?') }}
        </a>
      @endif
    </form>

    <p
      style="
        text-align: center;
        font-size: 1.3rem;
        color: var(--Dark-gray-blue);
        justify-self: flex-end;
      "
    >
      &copy; Kabul University 2024
    </p>
  </body>
</html>
