@props(['position' => '', 'name' => '', 'image' => ''])

<div class="flex flex-col items-center justify-center  bg-white rounded-lg shadow-md max-w-xs">
    <!-- Circle Image -->
    <div class="w-80  mb-4">
        <img src="{{ $image }}" alt="Profile" class="w-full h-full object-cover ">
    </div>

    <!-- Name and Position -->
   <div class="p-2 text-center">
    <h3 class="text-xl font-bold text-gray-800">{{$name}}</h3>
    <p class="text-gray-600">{{ $position }}</p>
   </div>
</div>
