<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail Management System PT. Javas Teknologi Integrator</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

   @include('layouts.inc.style')
</head>

<body>

    @include('components.navbar')

    <main class="flex !h-screen">
        @include('components.sidebar')
        <section class="flex-1 w-full">
            <div class="pt-[90px] px-6
        ">
                @yield('content')
            </div>
        </section>
    </main>

    @include('layouts.inc.script')
    @stack('script')
    
</body>

</html>
