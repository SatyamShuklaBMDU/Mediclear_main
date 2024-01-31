{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
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

    <div class="container">
        <div class="row">
            <div class="col-sm-5 mx-auto divup pt-5">
                <div class="divdown mt-5">

                    <div class="text-center logo"><img src="newlogo1.png" alt="" /></div>

                    <h3 class="text-center text-white pb-3">
                        Recover Your Password
                    </h3>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="h5 text-center">
                            <input type="email" name="email" :value="old('email')" required autofocus
                                class="form-control border rounded btn-lg bg-light shadow-lg text"
                                placeholder="Email" />
                            <br>
                            @if ($errors->has('email'))
                                <span class="help-block">{{ $errors->first('email') }}</span>
                            @endif


                            <br>


                            <button class="btn btn-light text-dark btn-lg fornbutton" type="submit" class="link">Send
                                Reset Link
                            </button>

                       

                        </div>
                    </form>
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
