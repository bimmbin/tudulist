<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
       

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-lesle text-white">
            @include('layouts.navigation')

            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> --}}

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

    
        
    </body>


    <script>


    for (let index = 0; index < $('.taskCount').length; index++) {
        
        $('#chk-btn'+index).mouseenter(function(){
            $('#check'+index).toggleClass("opacity-0");
        });

        $('#chk-btn'+index).mouseleave(function(){
            $('#check'+index).toggleClass("opacity-0");
        });

    }

    for (let index = 0; index < $('.finishedCount').length; index++) {
        $('#unchk-btn'+index).mouseenter(function(){
            $('#uncheck'+index).toggleClass("opacity-0");
        });

        $('#unchk-btn'+index).mouseleave(function(){
            $('#uncheck'+index).toggleClass("opacity-0");
        });
    }

    </script>




    {{-- <script src="/js/script.js"></script> --}}


</html>
