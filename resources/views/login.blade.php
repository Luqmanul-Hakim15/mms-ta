<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail Management System PT. Javas Teknologi Integrator</title>

    {{-- VITE --}}
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    {{-- Resource --}}
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="">
    {{-- Section Login Start --}}
    <section class="flex  w-full items-center h-screen">
        {{-- Left Section Start  --}}
        <div class=" flex-1 h-full bg-spotSubtle items-center justify-center flex">
            <img src="{{ asset('images/login3.svg') }}" class="mx-auto w-[40%] " alt="login">
            <div class=" w-[45%] px-20 min-h-screen">
                {{-- Left Section End      --}}

                {{-- Right Section Start --}}
                <div class="bg-white w-[115%] px-10 py-10 min-h-screen">
                    <div class="mx-auto text-center pt-5">
                        <h1 class="text-5xl font-bold text-primary">Mail</h1>
                        <h5 class="text-2xl pt-2">Management System</h5>
                        <p class="pt-2 text-sm">PT. Javas Teknologi Integrator</p>
                    </div>
                    <div>
                        <h3 class="pt-10 text-3xl font-semibold">Welcome Back!</h3>
                        <p class="text-sm opacity-50 font-light ">Silahkan masuk untuk mengelola dan dokumentasi surat</p>
                    </div>
                    <div class="pt-10">
                        @if(session('message'))
                            @php
                                $type = session('type', 'info');
                            @endphp
                            @include('components.alerts', ['type' => $type, 'slot' => session('message')])
                        @endif
                        <form action="{{ route('login-post') }}" method="POST">
                            @csrf
                            <div class="mb-5">
                                <label for="usname" class="font-semibold">Username</label>
                                <input type="text" name="usname" placeholder="Masukan username" id="usname" class="w-full px-4 py-3 focus:outline-spotSubtle border mt-2 border-line rounded-lg">
                            </div>
                            <div class="mb-10">
                                <label for="passMasuk" name="password" class="font-semibold">Kata Sandi</label>
                                <div class="relative">
                                    <input type="password" name="password" placeholder="Masukan Kata Sandi" id="passMasuk" autocomplete="on" class="w-full focus:outline-spotSubtle border border-line px-4 py-3 rounded-lg mt-3">
                                    <div id="showPass" class="absolute cursor-pointer top-[25px] right-6">
                                        <i class="fas fa-eye fa-lg"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="w-full px-6 py-3 bg-primary rounded-lg font-semibold  text-white">Masuk</button>
                                <p class="text-center text-sm mt-3 ">Tidak punya akun? <a href="" class="text-primary font-semibold hover:text-black opacity-100">Hubungi administrator</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- Right Section End  --}}

    </section>
    {{-- Section Login End --}}

    {{-- javascript Start  --}}
    {{-- <script src="../node_modules/jquery/dist/jquery.min.js"></script> --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script>
        $(document).ready(function() {
            $('#showPass').click(function() {
                if ($('#passMasuk').prop('type') === 'password') {
                    $('#passMasuk').prop('type', 'text');
                    $('#showPass i').removeClass('fa-eye').addClass('fa-eye-slash')
                } else {
                    $('#passMasuk').prop('type', 'password');
                    $('#showPass i').removeClass('fa-eye-slash').addClass('fa-eye')
                }
            })
        })
    </script>
    {{-- javascript End  --}}
</body>

</html>