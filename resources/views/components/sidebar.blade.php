@php

    $lecturerRole = \App\Enums\RoleEnums::Staff->value;
    $adminRole = \App\Enums\RoleEnums::Administrator->value;
    $superAdminRole = \App\Enums\RoleEnums::SuperAdministrator->value;
@endphp
<!-- Sidebar -->
<div id="sidebar" class="fixed inset-y-0 left-0 bg-secondary-400 text-white w-64 transition-transform transform -translate-x-full lg:translate-x-0 overflow-y-auto  z-50">
    <div class="px-6 py-4 flex items-center justify-between lg:justify-center">
        <div class="text-lg font-semibold"><br>{{ config('app.name', 'Laravel') }}</div>
        <button id="sidebarClose" class="lg:hidden text-gray-300 hover:text-white">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <nav class="flex-1 px-2 py-4 space-y-1">

        <a href="{{ route('dashboard.users') }}" class="block px-2 py-2 rounded-md bg-secondary-600 hover:bg-secondary-700 transition duration-300">Dashboard</a>

        @if (Auth::user()->user_type === $superAdminRole || Auth::user()->user_type === $adminRole  )


            <div x-data="{ open: false }" class=" rounded-md bg-secondary-600" >
                <a href="#" @click.prevent="open = !open" class="block px-2 py-2 rounded-md hover:bg-secondary-700">Menu</a>
                <div x-show="open" class="space-y-1 pl-4 mt-1 pr-2 pb-4">
                    <a href=" {{ route('menu.category.index') }} " class="block px-2 py-1 rounded-md bg-secondary-400 hover:bg-secondary-700">Categories</a>

                    <a href="{{ route('menu.index') }}" class="block px-2 py-1 rounded-md bg-secondary-400 hover:bg-secondary-700">Menu Items</a>
                </div>
            </div>


            <div x-data="{ open: false }" class=" rounded-md bg-secondary-600" >
                <a href="#" @click.prevent="open = !open" class="block px-2 py-2 rounded-md  hover:bg-secondary-700">Users</a>
                <div x-show="open" class="space-y-1 pl-4 mt-1">
                    <a href="#" class="block px-2 py-2 rounded-md  hover:bg-secondary-700">Manage User</a>
                    <a href="#" class="block px-2 py-2 rounded-md  hover:bg-secondary-700">Add New User</a>
                </div>
            </div>



        @endif






        <a href="#" class="block px-2 py-2 rounded-md bg-secondary-600 hover:bg-secondary-700 transition duration-300">Profile</a>

        <a href="" class="block px-2 py-2 rounded-md bg-secondary-600 hover:bg-red-500 hover:text-white transition duration-300">
            <x-logout />
        </a>

    </nav>
</div>





