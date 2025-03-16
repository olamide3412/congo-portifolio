<x-layout>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <div class="flex items-center">
                <div class="w-32 h-32 rounded-full overflow-hidden border border-gray-300">
                    <img src="{{  $user->staff->staff_photo  }}" alt="{{ $user->staff->full_name }}" class="w-full h-full object-cover">
                </div>
                <div class="ml-6">
                    <h1 class="text-2xl font-semibold">{{  $user->staff->full_name }}</h1>
                    <p class="text-gray-600">Staff ID: {{ $user->staff->staff_id ?? 'Nil' }}</p>

                </div>
            </div>
        </div>

        <div class="container mx-auto py-3">
                <h3 class="text-2xl font-bold mb-3">Staff  Details</h3>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <p><strong>First Name:</strong> {{ $user->staff->first_name }}</p>
                    <p><strong>Last Name:</strong> {{ $user->staff->last_name}}</p>
                    <p><strong>Other Name:</strong> {{ $user->staff->other_name }}</p>
                    <p><strong>User Type:</strong> {{ ucwords($user->user_type) }}</p>
                    <p><strong>Gender:</strong> {{ $user->staff->gender }}</p>
                    <p><strong>Phone Number:</strong> {{ $user->staff->phone_number }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Department:</strong> {{ $user->staff->department?->department_name_title ?? 'None' }}</p>



                    <a href="{{ route('users.index') }}" class="text-blue-500 hover:text-blue-700 mt-4 inline-block">Back to Staff List</a>
                    <p class="inline text-bold"> | </p>
                    <button onclick="editUser()" class="text-secondary-500  rounded  hover:text-secondary-700 inline-block">Edit</button>
                    <p class="inline text-bold"> | </p>
                    <form action="{{ route('user.destroy', $user) }}" method="POST" class="hidden">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')" class="text-red-500 hover:text-red-700 ml-2">Delete</button>
                    </form>

                     <!-- Custom Delete Button -->
                     <button onclick="confirmDelete()" class="text-red-500 hover:text-red-700 ml-2">Delete</button>


                </div>
        </div>


   </div>


</div>


    <x-modal.delete key="{{$user->id}}" route="user.destroy" message="Are you sure you want to delete this user?" />

  <!-- Modal -->
  <div id="editUserModal" class="hidden fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>


        <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="sm:flex sm:items-start ">
                <div class="mt-3 text-center sm:mt-0 sm:text-left  w-full">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" >
                        Update Staff Details
                    </h3>

                    <div class="mt-2">
                        <form id="assignForm" action="{{ route('user.update',$user) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                 <x-forms.input label="Last Name" name="last_name" value="{{ $user->staff->last_name }}" required/>
                                 <x-forms.input label="FirstName" name="first_name" value="{{ $user->staff->first_name }}" required/>
                                 <x-forms.input label="Other Name" name="other_name" value="{{ $user->staff->other_name ?? '' }}" />
                                 <x-forms.input label="Phone Number" name="phone_number" value="{{ $user->staff->phone_number }}" required/>
                                 <x-forms.input label="Staff ID" name="staff_id" value="{{ $user->staff->staff_id ?? '' }}" />
                            </div>
                            <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse">
                                <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-secondary-500 text-base font-medium text-white hover:bg-secondary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary-500 sm:ml-3 sm:w-auto sm:text-sm">
                                    Update
                                </button>
                                <button type="button" onclick="closeEditModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:mt-0 sm:w-auto sm:text-sm">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>

    function editUser() {
        document.getElementById('editUserModal').classList.remove('hidden');
    }

    function closeEditModal() {
        document.getElementById('editUserModal').classList.add('hidden');
    }

</script>


</x-layout>
