<x-layout>



<div class=" p-10">
    <div class="container mx-auto p-5  bg-white rounded-lg shadow-md">
        <x-page-heading> @lang('messages.login') </x-page-heading>

        <x-forms.form method="POST" action="/login" >

        <x-forms.input label="Email" name="email" type="email" required/>

        <x-forms.input label="{{__('messages.password')}}" name="password" type="password" required/>


        <x-forms.divider/>



        <div class="flex justify-center">
            <x-forms.button class="text-center flex justify-center"> @lang('messages.login') </x-forms.button>
        </div>


        </x-forms.form>
    </div>
</div>



</x-layout>
