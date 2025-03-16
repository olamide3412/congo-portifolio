<div class="flex justify-end ">
    <div class="relative inline-block text-left">
        <!-- Button to trigger the dropdown -->
        <button id="dropdownButton" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary-500">
            <i class="fas fa-globe mr-2 mt-1"></i>
            <span>{{ session()->get('locale', 'en') }}</span>
            <svg class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
        </button>

        <!-- Dropdown menu -->
        <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-32 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
            <div class="py-1">
            <!-- English Option -->
            <a href="{{ route('locale', 'en') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                <i class="fas fa-flag-usa mr-3"></i>
                English
            </a>
            <!-- French Option -->
            <a href="{{ route('locale', 'fr') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                <i class="fas fa-flag mr-3"></i>
                French
            </a>
            </div>
        </div>
    </div>
</div>




<script>
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');

    dropdownButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
    });

    // Close dropdown when clicking outside of it
    window.addEventListener('click', function (e) {
        if (!dropdownButton.contains(e.target)) {
        dropdownMenu.classList.add('hidden');
        }
    });
</script>
