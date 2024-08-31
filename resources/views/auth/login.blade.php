<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>M&R</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="background-image: url(fondo.jpg); background-size: cover; height:100vh">
    <div class="container-fluid">
        <div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
            <div
                class="w-full p-6 m-auto bg-white border-t-4 border-blue-600 rounded-md shadow-md border-top lg:max-w-md">
                <!--session-->
                <x-auth-session-status class="mb-4" :status="session('status')" />
               
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <img src="img/logo.png" class="w-full" alt="logo">
             
                <form class="mt-6" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <div>
                            <h2 style="text-align: center; font-weight:bold">INICIAR SESION</h2>
                        </div>
                        <label for="email" class="block text-sm text-gray-800" :value="__('Email')">Email</label>
                        <input type="email" id="email" name="email" :value="old('email')" required autofocus
                            class="block w-full px-4 py-2 mt-2 text-blue-700 bg-white border rounded-md focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                    </div>
                    <div class="mt-4">
                        <div>
                            <label for="password" class="block text-sm text-gray-800" :value="__('Password')" >Password</label>
                            <input type="password" id="password"  name="password" required autocomplete="current-password"
                                class="block w-full px-4 py-2 mt-2 text-blue-700 bg-white border rounded-md focus:border--blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                        </div>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-xs text-gray-600 hover:underline">Forget Password?</a>
                        @endif
                        <div class="mt-6">
                            <button
                                class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-700 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                                {{ __('Log in') }}
                            </button>
                        </div>
                </form>
                <p class="mt-8 text-xs font-light text-center text-gray-700"> Don't have an account? <a href="#"
                        class="font-medium text-blue-600 hover:underline">Sign up</a></p>
            </div>
        </div>

    </div>


</body>

</html>
