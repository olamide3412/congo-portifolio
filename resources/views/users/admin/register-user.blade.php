<x-layout>


    <x-page-heading> Register User </x-page-heading>

    <x-forms.form method="POST" action=" {{ route('user.store') }} " >

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">

            <x-forms.input label="Last Name" name="last_name" required/>
            <x-forms.input label="FirstName" name="first_name" required/>
            <x-forms.input label="Other Name" name="other_name"/>

            <x-forms.select label="Gender" name="gender" required>
                <option value="">--Select Gender--</option>
                @foreach ($enumGENDERS as $gender )
                    <option value="{{$gender->value}}" {{ old('gender') == $gender->value ? 'selected' : '' }}> {{ Str::ucfirst($gender->value) }} </option>
                @endforeach
            </x-forms.select>

            <x-forms.input label="Phone Number" name="phone_number" required/>
            <x-forms.input label="Staff ID" name="staff_id"/>

        </div>
        <x-forms.divider/>




        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <x-forms.select label="User Type" name="user_type" required>
                <option value="">--Select user type--</option>
                @foreach($enumROLES as $role)
                    @if ($role != \App\Enums\UserRole::Student)
                        <option value="{{ $role->value }}" {{ old('user_type') == $role->value ? 'selected' : '' }} >{{ ucwords($role->value) }}</option>
                    @endif
                @endforeach
            </x-forms.select>

            <x-forms.select label="Department(Required If Lecturer)" name="department_id">
                <option value="">--Select Department--</option>
                @foreach ($departments as $department )
                    <option value="{{$department->id}}" {{ old('department_id') == $department->id ? 'selected' : '' }}> {{ $department->name }} </option>
                @endforeach
            </x-forms.select>

        </div>

        <x-forms.divider/>






    <x-forms.input label="Email" name="email" type="email" required/>
    <x-forms.input label="Password" name="password" type="password" required/>
    <x-forms.input label="Password Comfirmation" name="password_confirmation" type="password" required/>


    <x-forms.divider/>






    <div class="flex justify-center">
        <x-forms.button> Create User </x-forms.button>
    </div>

    </x-forms.form>


</x-layout>
