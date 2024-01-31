{{-- <x-guest-layout>
    <!-- Session Status -->



    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>


        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
 --}}





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mediclear</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ url('assests/css/style.css') }}" rel=stylesheet>



    <style>
        body {
            background-image: url("assests/img/mediclearbg.jpg");
            background-size: cover;
            background-attachment: fixed;
            /* background-position: center; */
        }
    </style>

<body>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    {{-- password-reser-success --}}
    @if (session()->has('password-reser-success'))
        <div class="alert alert-success">
            {{ session()->get('password-reser-success') }}
        </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-sm-5 mx-auto divup pt-5">
                <div class="divdown mt-5">

                    <div class="text-center logo"><img src="newlogo1.png" alt="" /></div>

                    <h3 class="text-center text-white pb-3">
                        Admin Login
                    </h3>

                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="h5 text-center">
                            <input type="email" class="form-control border rounded btn-lg bg-light shadow-lg text"
                                placeholder="Email" name="email" />
                            {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
                            <br>

                            <input type="password" class="form-control border rounded btn-lg bg-light shadow-lg text"
                                placeholder="Password" name="password" />
                            {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
                            <br>






                            <div class="mb-3 form-check d-flex flex-start">
                                <input type="checkbox" class="form-check-input h5 " id="exampleCheck1">
                                <label class="form-check-label h5 mt-0 text-white" for="exampleCheck1"> &nbsp;Remember
                                    Me</label>
                            </div>
                            <div class="d-flex  justify-content-end">
                                <span><a href="{{ route('password.request') }}"
                                        class="text-decoration-none text-white">forget Password?</a></span>
                            </div>
                            <br>


                            <button class="btn btn-light text-dark btn-lg forbutton" type="submit" class="login">
                                Login</a>
                            </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<!--bootstrap js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</html>
