<x-layout>

    <div class="container mx-auto p-1">
        <div class="text-left">
            <x-page-location> {{ Auth::user()->user_type }}>{{ Auth::user()->first_name }}>dashboard  </x-page-location>


            <div class="container mx-auto p-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @php
                        $mesageCount =  App\Models\Message::count();
                        $staffCount =  App\Models\User::where('user_type', \App\Enums\RoleEnum::Staff->value)->count();
                        $adminCount =  App\Models\User::where('user_type', \App\Enums\RoleEnum::Administrator->value)->count();
                        $superAdminCount =  App\Models\User::where('user_type', \App\Enums\RoleEnum::SuperAdministrator->value)->count();
                    @endphp
                    <x-count-card :title="'Messages'" :count="$mesageCount" :icon="course_icon()" />
                    <x-count-card :title="ucfirst(\App\Enums\RoleEnum::Staff->value)" :count="$staffCount" :icon="user_icon()" />
                    <x-count-card :title="ucfirst(\App\Enums\RoleEnum::Administrator->value)" :count="$adminCount" :icon="admin_icon()" />
                    @if (Auth::user()->user_type == \App\Enums\RoleEnum::SuperAdministrator->value)
                        <x-count-card :title="ucwords(\App\Enums\RoleEnum::SuperAdministrator->value)" :count="$superAdminCount" :icon="super_admin_icon()" />
                    @endif


                    <!-- Add more cards here if needed -->
                </div>

            </div>

        </div>
    </div>



</x-layout>
