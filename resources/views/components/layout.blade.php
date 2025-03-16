<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dieu est bon et riche')</title>
    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/dbr.png') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


 <!-- Important: vite import -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
 <!-- Important: vite import -->

</head>
<body >



    <div class="bg-gray-100 flex flex-col min-h-screen" >
        <x-navbar/>

        <!-- Main Content -->
        <main class="flex-grow space-y-0 ">
            {{ $slot }}
        </main>

        <x-footer/>
    </div>
    <button id="scrollTopBtn" class="fixed bottom-5 right-5 bg-secondary-300 text-white p-3 rounded-full shadow-lg hidden transition-opacity duration-500">
        ↑
    </button>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const scrollTopBtn = document.getElementById("scrollTopBtn");

            // When the user scrolls down 100px from the top of the document, show the button
            window.onscroll = function() {
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    scrollTopBtn.classList.remove('hidden');
                    scrollTopBtn.classList.add('opacity-100');
                } else {
                    scrollTopBtn.classList.add('hidden');
                    scrollTopBtn.classList.remove('opacity-100');
                }
            };

            // When the user clicks on the button, scroll to the top of the document
            scrollTopBtn.addEventListener('click', function () {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

           // toastr.success('HII');
            @if (session('success'))
                 toastr.success('{{ session('success') }}');
            @endif


            @if (Session::has('message'))
                toastr.success("{{ session('message') }}");
            @endif

            @if (Session::has('error'))
                toastr.error("{{ session('error') }}");
            @endif

            @if (Session::has('info'))
                toastr.info("{{ session('info') }}");
            @endif

            @if (Session::has('warning'))
                toastr.warning("{{ session('warning') }}");
            @endif

        });

    </script>

</body>
</html>
