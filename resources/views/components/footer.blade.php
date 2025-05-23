<!-- resources/views/components/footer.blade.php -->
<footer class="bg-secondary-500 text-white p-2">
    <div class="container mx-auto px-4 py-2">
         <!-- Logo Section -->
         <div class="mb-4 md:mb-0 flex justify-center">
            <a href="{{ route('landing') }}" class="flex items-center py-4 px-2">
                <img src="{{ Vite::asset('resources/images/dbr_white.png')}}" alt="Logo" width="40" height="30" class="h-15 w-15 rounded-full mr-2">
                <span class="font-semibold text-white text-lg">Dieu est bon et riche</span>
            </a>
        </div>

        <div class=" flex justify-center">
            <div class="text-white space-x-5  text-xl">
              <a href="https://www.facebook.com/share/VVTDVnZXh2x3Lgbq/?mibextid=qi2Omg" target="_blank" class="hover:text-blue-500">  <i class="fa-brands fa-facebook "></i> </a>
              <a href="#" class="hidden hover:text-black" >  <i class="fa-solid fa-x"></i> </a>
              <a href="#" class="hidden hover:text-red-500">  <i class="fa-brands fa-youtube"></i> </a>
              <a href="https://wa.me/2439147304" target="_blank"  class="hover:text-green-500">  <i class="fa-brands fa-whatsapp"></i> </a>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row justify-between ">
            <div>
                <h3 class="text-2xl font-semibold mb-4">@lang('messages.quick_links')</h3>
                <div class="flex flex-col space-y-0  mb-4 md:mb-0">
                    <a href="{{ route('about') }}" class="text-white hover:text-secondary-100">@lang('messages.about_us')</a>
                    <a href="{{ route('contact') }}" class="text-white hover:text-secondary-100">@lang('messages.contact_us')</a>
                    <a href="#" class="text-white hover:text-secondary-100">@lang('messages.faq')</a>
                </div>
            </div>

            <div>
                <h3 class="text-2xl font-semibold mb-4">@lang('messages.contact_us')</h3>
                <div class="flex flex-col space-y-0  mb-4 md:mb-0">
                    <a href="https://maps.app.goo.gl/QbrAXYnLkTx274Zq9" target="_blank"  class="text-white hover:text-secondary-100">@lang('messages.address_visit')</a>
                    <a href="tel:+2439147304"  class="text-white hover:text-secondary-100">Tel: +243 9147 304</a>
                    <a href="mailto:support@dbrsarl.com" class="text-white hover:text-secondary-100">E-mail: support@dbrsarl.com</a>
                </div>
            </div>

            <div>
                <h3 class="text-2xl font-semibold mb-4">@lang('messages.opening_hours')</h3>
                <div class="flex flex-col space-y-0  mb-4 md:mb-0">
                    <a href="#">@lang('messages.opening_hour_1')</a>
                    <a href="#">@lang('messages.opening_hour_2')</a>
                </div>
            </div>

        </div>

        <!-- Copyright Section -->
        <div class=" flex justify-center mt-10">
            <div class="text-white">
                <p class=" text-center">
                    &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. @lang('messages.right_reserved') | <a href="https://www.instagram.com/skynetdigitalhubs?utm_source=qr&igsh=d3Znb3l1NHAzZHNq" target="_blank" class="text-white hover:text-secondary-100">Developed By Skynet Digital Hub</a>
                </p>
            </div>
        </div>
    </div>
</footer>

