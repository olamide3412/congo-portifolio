<x-layout>

    <section class="text-center pt-6 mb-10 lg:sticky top-0  z-20 ">
        <h1 class="font-bold text-4xl uppercase mb-5">Manage Staff</h1>
        <x-forms.form action="/search">
        <x-forms.input :label="false" name="q" placeholder="Search Staff..."/>
        </x-forms.form>
    </section>


    <div class="space-y-4 rounded-lg shadow-sm">

        <table class="min-w-full bg-white border ">
            <thead>
                <tr class="text-left text-white bg-secondary-500">
                    <th class="py-2 px-4 border">S/N</th>
                    <th class="py-2 px-4 border">Name</th>
                    <th class="py-2 px-4 border">Staff ID</th>
                    <th class="py-2 px-4 border">User Type</th>
                    <th class="py-2 px-4 border">Gender</th>
                    <th class="py-2 px-4 border">Phone Number</th>
                    <th class="py-2 px-4 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $index => $user)
                    <tr class=" text-left hover:bg-gray-100">
                        <td class="py-2 px-4 border">{{ $index + 1 }}</td>
                        <td class="py-2 px-4 border">{{ $user->staff->full_name }}</td>
                        <td class="py-2 px-4 border">{{ $user->staff->staff_id }}</td>
                        <td class="py-2 px-4 border">{{ Str::ucfirst($user->user_type) }}</td>
                        <td class="py-2 px-4 border">{{ ucfirst($user->staff->gender) }}</td>
                        <td class="py-2 px-4 border">{{ $user->staff->phone_number }}</td>
                        <td class="py-2 px-4 border text-center">
                            <a href="{{ route('user.show', $user) }}" class="text-blue-500 hover:text-blue-700 inline">View</a>
                            <p class=" inline">|</p>
                            <a href="{{ route('user.show', $user) }}" class="text-red-500 hover:text-red-700 inline">Block</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>




        <div class="py-10">
            {{$users->links('pagination::tailwind')}}
        </div>



    </div>


</x-layout>
