<x-layout>




     <!-- About Section -->
     <div id="about" class=" grid grid-cols-1 md:grid-cols-1 py-28  text-center  group bg-secondary-500 text-white space-y-5 ">
       <div class="space-y-5 px-10">
            <h2 class="text-4xl font-bold  hover:animate-bounce">@lang('messages.about')</h2>
            <p class="text-lg leading-relaxed max-w-3xl mx-auto text-justify">
                @lang('messages.about_statement')
            </p>
       </div>
        <div class=" hidden p-1  border border-transparent hover:border-secondary-200  md:w-1/2   mx-auto">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/-EoNrg_DR3s?si=FhG2tH47DeY6ygeL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

    </div>

    <!-- Features Section -->
    <div id="service" class="container grid grid-cols-1 md:grid-cols-2 mx-auto py-10 px-6    group">
        <div class=" flex items-center md:justify-items-end">
            <h2 class="text-4xl font-bold text-secondary-400  text-left mb-10 group-hover:animate-bounce">@lang('messages.our_value')</h2>
        </div>

        <div class="grid grid-cols-1  gap-8 text-justify">

              <div class="collapsible-section border-b-2 border-gray-300 p-4">
                <h2 class="toggle-header flex items-center cursor-pointer text-lg font-semibold text-gray-800">
                  <span class="arrow mr-2 transition-transform transform rotate-0">▶</span> @lang('messages.our_value_1')
                </h2>
                <div class="toggle-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                  <p class="text-gray-600 mt-4 ">
                   @lang('messages.our_value_1_text')
                  </p>
                </div>
              </div>

              <div class="collapsible-section border-b-2 border-gray-300 p-4">
                <h2 class="toggle-header flex items-center cursor-pointer text-lg font-semibold text-gray-800">
                  <span class="arrow mr-2 transition-transform transform rotate-0">▶</span> @lang('messages.our_value_2')
                </h2>
                <div class="toggle-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                  <p class="text-gray-600 mt-4">
                    @lang('messages.our_value_2_text')
                  </p>
                </div>
              </div>

              <div class="collapsible-section border-b-2 border-gray-300 p-4">
                <h2 class="toggle-header flex items-center cursor-pointer text-lg font-semibold text-gray-800">
                    <span class="arrow mr-2 transition-transform transform rotate-0 bg-transparent focus:bg-transparent focus:outline-none">▶</span>
                    @lang('messages.our_value_3')
                </h2>
                <div class="toggle-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                  <p class="text-gray-600 mt-4">
                    @lang('messages.our_value_3_text')
                  </p>
                </div>
              </div>




        </div>
    </div>


    <div  class=" container grid grid-cols-1 md:grid-cols-2 p-10  space-y-5 text-justify">
        <div class=" flex items-center md:justify-items-end">
            <h2 class="text-4xl font-bold text-secondary-400">@lang('messages.why_choose_us')</h2>
        </div>
        <div class=" flex items-center md:justify-items-end">
            <p class="text-lg leading-relaxed max-w-3xl mx-auto">
                @lang('messages.why_choose_us_text')
            </p>
        </div>


    </div>

    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-1 justify-items-center gap-8 p-5">
        <x-staff-view :position="'CEO'" :name="'Mr. Ugochukwu Solomon Njideofor'" :image="Vite::asset('resources/images/ceo_img.png')" />
    </div>







    <script>
        document.addEventListener('DOMContentLoaded', function () {


            document.querySelectorAll('.collapsible-section').forEach(section => {
                const toggleHeader = section.querySelector('.toggle-header');
                const toggleContent = section.querySelector('.toggle-content');
                const arrow = section.querySelector('.arrow');

                toggleHeader.addEventListener('click', () => {
                    if (toggleContent.classList.contains('max-h-0')) {
                        toggleContent.classList.remove('max-h-0');
                        toggleContent.classList.add('max-h-40'); // Adjust height as needed
                        arrow.classList.add('rotate-90');
                    } else {
                        toggleContent.classList.remove('max-h-40');
                        toggleContent.classList.add('max-h-0');
                        arrow.classList.remove('rotate-90');
                    }
                });
            });


       });
    </script>


</x-layout>
