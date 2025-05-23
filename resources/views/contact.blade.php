<x-layout>


    <div id="about" class=" py-28 px-10 text-center  group bg-white text-black ">
        <h2 class="text-4xl font-bold text-center  hover:animate-bounce">@lang('messages.contact_us')</h2>
        <p class="text-lg leading-relaxed max-w-3xl mx-auto">
            @lang('messages.contact_us_subtitle')
        </p>
    </div>

     <!-- Contact Us Section -->
     <div id="contact" class="container mx-auto py-10 px-6 ">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $contact_div_class_attr = 'bg-white p-6 rounded-lg shadow-md text-center border border-transparent hover:border-secondary-200 group transition-colors duration-1000 hover:scale-105 hover:shadow-xl';
            @endphp
            <!-- Phone Number -->
            <div class="{{$contact_div_class_attr}}">
                <div class="mb-4 group-hover:animate-bounce">
                    <i class="fas fa-phone-alt text-secondary-500 text-4xl"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4">@lang('messages.phone_number')</h3>
                <a href="tel:+2439147304" class="text-secondary-500">@lang('messages.call_us_at',['Phone' => '+243 9147 304'])</a>
            </div>

            <!-- Address -->
            <div class="{{$contact_div_class_attr}}">
                <div class="mb-4 group-hover:animate-bounce">
                    <i class="fas fa-map-marker-alt text-secondary-500 text-4xl"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4">@lang('messages.address')</h3>
                <p class="text-gray-600">@lang('messages.address_visit')</p>
            </div>

            <!-- Email -->
            <div class="{{$contact_div_class_attr}}">
                <div class="mb-4 group-hover:animate-bounce">
                    <i class="fas fa-envelope text-secondary-500 text-4xl"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4">E-mail</h3>
                 <a href="mailto:support@dbrsarl.com" class="text-secondary-500">@lang('messages.email_us_at', ['Email' => 'support@dbrsarl.com'])</a>
            </div>

             <!-- Opening Hours -->
             <div class="{{$contact_div_class_attr}}">
                <div class="mb-4 group-hover:animate-bounce">
                    <i class="fa-solid fa-clock text-secondary-500 text-4xl"></i>
                </div>
                <h3 class="text-2xl font-semibold mb-4">@lang('messages.opening_hours')</h3>
                <div class="flex flex-col space-y-0  mb-4 md:mb-0">
                    <a href="#">@lang('messages.opening_hour_1')</a>
                    <a href="#">@lang('messages.opening_hour_2')</a>
                </div>
            </div>
        </div>


        <x-forms.form method="POST" action="{{ route('message.store') }}" >

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
               <div>
                    <x-forms.input label="{{__('messages.msg_form_name')}} *" name="name" required/>
                    <x-forms.input label="{{__('messages.msg_form_email')}} *" name="email" type="email" required/>
                    <x-forms.input label="{{__('messages.msg_form_phone') }}*" name="phone"  required/>
               </div>
                <x-forms.textarea label="{{__('messages.msg_form_message')}} *" rows="8" name="message" type="text" maxlength="5000" required/>

            </div>


            <div class="flex justify-center">
                <x-forms.button> @lang('messages.msg_form_btn')</x-forms.button>
            </div>


            </x-forms.form>


    </div>


    <div class=" p-1 rounded-sm shadow-md mt-8 border border-transparent hover:border-secondary-200 md:w-1/2  mx-auto">

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3304.4400329649625!2d15.306515388526611!3d-4.338284696689033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1726215528261!5m2!1sen!2sng"
                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                class="aspect-video">
        </iframe>
    </div>


</x-layout>
