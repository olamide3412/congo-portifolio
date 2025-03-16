<x-layout>

    <div id="home" class="bg-white">


            <div class=" overflow-hidden relative ">

                    <!-- Image 1 with dark overlay -->
                    <div class="relative w-full ">
                        <img src="{{ Vite::asset('resources/images/money.jpg') }}" class="w-full min-h-80  object-cover" alt="Slide 1">
                        <!-- Dark overlay -->
                        <div class="absolute inset-0 bg-black opacity-50"></div>
                    </div>
                    <!-- Animated Text -->
                    <div class="absolute top-1/3 lg:top-1/3 left-1/2 transform -translate-x-1/2 z-10 animate-slide-in px-5">
                        <h2 class="text-4xl md:text-6xl font-bold lg:text-8xl md:font-extrabold text-stroke  text-nowrap">Dieu est bon et riche</h2>
                        <p id="animated-text" class="text-white font-semibold text-center"></p>
                    </div>


            </div>

    </div>


    <!-- About Section -->
    <div id="about" class=" py-10 px-10 text-center  group bg-secondary-700 text-white ">
        <h2 class="text-4xl font-bold  mb-6 group-hover:animate-bounce">@lang('messages.about_us')</h2>
        <div class=" p-1 lg:p-6 rounded-lg shadow-md animate-slide-in">
            <p class="text-lg leading-relaxed max-w-3xl mx-auto text-justify">
                @lang('messages.about_statement')
            </p>
        </div>
    </div>


     <!-- About Section -->
    <div id="service" class=" py-10 px-2   group  ">
        <h2 class="text-4xl text-center font-bold  mb-6 group-hover:animate-bounce">@lang('messages.services')</h2>
        <p class="text-lg text-center leading-relaxed max-w-3xl mx-auto">
            @lang('messages.services_subtitle')
        </p>
        @include('include.service')
    </div>



    <script>

        document.addEventListener('DOMContentLoaded', function () {






            const textElement = document.getElementById('animated-text');
            const text = "@lang('messages.motto')";
            let textIndex = 0;

            function writeText() {
                if (textIndex < text.length) {
                    textElement.textContent += text.charAt(textIndex);
                    textIndex++;
                    setTimeout(writeText, 150); // Adjust the speed of writing
                } else {
                    setTimeout(clearText, 2000); // Wait before clearing text
                }
            }

            function clearText() {
                if (textIndex >= 0) {
                    textElement.textContent = text.substring(0, textIndex);
                    textIndex--;
                    setTimeout(clearText, 50); // Adjust the speed of clearing
                } else {
                    setTimeout(writeText, 1000); // Wait before starting to write again
                }
            }

            writeText();

        });
    </script>
</x-layout>
