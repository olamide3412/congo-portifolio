@php
    $nav_class = ' py-2 px-2 text-gray-900  font-semibold hover:text-secondary-500';
    $nav_class_moblie = ' block px-3 py-2 rounded-md text-base font-medium hover:bg-secondary-500 hover:text-white';
@endphp
<nav x-data="{ open: false }" class="flex justify-between items-center py-2 border-b border-white/10 p-3 bg-white shadow-md fixed top-0 left-0 w-full z-50">
    <div :class="{ 'hidden': open }">
        <a href="/">
            <img src="{{ Vite::asset('resources/images/dbr.png') }}" width="40" height="25" alt="" class=" inline">
            <span class=" font-semibold text-gray-500 text-lg">Dieu est bon et riche</span>
        </a>
    </div>
    <!-- Primary Navbar items -->
    <div class="hidden md:flex items-center space-x-1">
        <a href="/" class=" py-2 px-2 text-gray-900  font-semibold rounded-sm " > @lang('messages.home') </a>
        <a href="{{ route('about') }}" class="{{$nav_class}}">@lang('messages.about_us')</a>
        <a href="{{ route('service') }}" class="{{$nav_class}}">@lang('messages.services')</a>
        <a href="{{ route('contact') }}" class="{{$nav_class}}">@lang('messages.contact_us')</a>
        @auth

             <div x-data="{ open: false }" class="relative">
                <a href="#" @click.prevent="open = !open" class="cursor-pointer {{$nav_class}}">@lang('messages.main_menu')</a>
                <div x-show="open" @click.away="open = false" x-transition class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-lg">
                    <a href="{{ route('dashboard.users') }}" class="{{$nav_class_moblie}}">@lang('messages.dashboard')</a>
                    <a href="{{ route('message.index') }}" class="{{$nav_class_moblie}}">@lang('messages.messages')</a>
                </div>
            </div>
        @endauth
    </div>

    <div class="flex items-center space-x-2">

        <div class="hidden md:flex">
            @guest
                <a href="{{ route('login') }}" @click="open = false" class="px-3 py-2 rounded-md text-base font-medium hover:bg-secondary-500 hover:text-white">Login</a>
            @endguest

            @auth
                <div class="px-3 py-2 rounded-md text-base font-medium hover:bg-red-500 hover:text-white">
                    <x-logout/>
                </div>
            @endauth
        </div>
        <x-lang/>
    </div>



<!-- Container element with x-data -->
<div x-data="{ open: false }" class=" md:hidden">
    <!-- Toggle Button for Mobile Menu -->
    <button @click="open = !open" class="text-secondary-500 focus:outline-none" :aria-expanded="open ? 'true' : 'false'" aria-controls="mobile-menu" type="button">
        <!-- SVG icons here -->
        <svg :class="open ? 'hidden' : 'block'" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
        <svg :class="open ? 'block' : 'hidden'" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <!-- Mobile Menu -->
    <div x-show="open" @click.away="open = false" class="absolute top-14 right-0 w-48 bg-white shadow-lg rounded-lg p-4 z-50" id="mobile-menu" x-transition>
        <!-- Menu items here -->
        <div class="space-y-2">
            <!-- Menu Links that close the menu when clicked -->
            <a href="/" @click="open = false" class="{{$nav_class_moblie}}">@lang('messages.home')</a>
            <a href="{{ route('about') }}" @click="open = false" class="{{$nav_class_moblie}}">@lang('messages.about_us')</a>
            <a href="{{ route('service') }}" @click="open = false" class="{{$nav_class_moblie}}">@lang('messages.services')</a>
            <a href="{{ route('contact') }}" @click="open = false" class="{{$nav_class_moblie}}">@lang('messages.contact_us')</a>
            @guest
                <a href="{{ route('login') }}" @click="open = false" class="{{$nav_class_moblie}}">Login</a>
            @endguest
            @auth
                <div x-data="{ open: false }" class="relative">
                    <a href="#" @click.prevent="open = !open" class="cursor-pointer {{$nav_class}}">@lang('messages.main_menu')</a>
                    <div x-show="open" @click.away="open = false" x-transition class="absolute  right-1/2 mt-2 mr-20  w-36 bg-white shadow-lg rounded-lg">
                        <a href="{{ route('dashboard.users') }}" class="{{$nav_class_moblie}}">@lang('messages.dashboard')</a>
                        <a href="{{ route('message.index') }}" class="{{$nav_class_moblie}}">@lang('messages.messages')</a>
                    </div>
                </div>

                <div class="px-3 py-2 rounded-md text-base font-medium hover:bg-red-500 hover:text-white">
                    <x-logout/>
                </div>
            @endauth
        </div>
    </div>
</div>

</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Helper function to handle scrolling or redirection

        function handleNavigation(linkSelector, sectionId) {
            const link = document.querySelector(linkSelector);
            const section = document.getElementById(sectionId);
            const navBarHeight = document.querySelector('nav').offsetHeight; // Get the height of the navigation bar

            if (link && section) {
                link.addEventListener('click', function (e) {
                    e.preventDefault();

                    if (window.location.pathname === '/') {
                        // If on the landing page, scroll to the section
                        window.scrollTo({
                            top: section.offsetTop - navBarHeight, // Offset by the height of the navbar
                            behavior: 'smooth'
                        });
                    } else {
                        // If not on the landing page, navigate to the landing page and scroll to the section
                        window.location.href = `/#${sectionId}`;
                    }
                });
            }
        }

         // Handle navigation desktop
        handleNavigation('a[href="#home-desktop"]', 'home');
        handleNavigation('a[href="#about-desktop"]', 'about');
        handleNavigation('a[href="#service-desktop"]', 'service');
        handleNavigation('a[href="#contact-desktop"]', 'contact');

        // Handle navigation for mobile
        handleNavigation('a[href="#home-mobile"]', 'home');
        handleNavigation('a[href="#about-mobile"]', 'about');
        handleNavigation('a[href="#service-mobile"]', 'service');
        handleNavigation('a[href="#contact-mobile"]', 'contact');




        const navItems = document.querySelectorAll('.nav-item');

        navItems.forEach(item => {
            item.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default link behavior for demonstration

                // Remove the active class from all items
                //navItems.forEach(nav => nav.classList.remove('border-b-4', 'border-secondary-500'));

                // Add the active class to the clicked item
                this.classList.add('border-b-4', 'border-secondary-500');
            });
        });







    });
</script>

