<x-layout>


    <div class="container mx-auto sm:px-6 lg:px-8 py-12 px-5">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <div class="flex items-center">
                <div>
                    <h1 class="text-xl font-semibold"><strong>@lang('messages.ticket_number'): </strong>{{  $message->ticket_number}}</h1>
                    <p class="text-gray-600 font-semibold">E-mail: {{ $message->email }}</p>
                </div>
            </div>
            <p class=" text-end">{{ get_date_time_interval($message->created_at)  }}</p>
        </div>

        <div class="container mx-auto py-3">
                <h3 class="text-2xl font-bold mb-3">@lang('messages.msg_form_message')</h3>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <p class=" mb-5 text-justify"> {{ $message->message}}</p>
                    <p><strong>Locale:</strong> {{ $message->locale}}</p>
                    <p><strong>@lang('messages.last_date_updated'): </strong> {{ get_date_specific_format($message->updated_at, 'D, d-M-Y h:i')}}</p>


                    <a href="{{ route('message.index') }}" class="text-blue-500 hover:text-blue-700 mt-4 inline-block">@lang('messages.back_to_messages')</a>
                    <p class="inline text-bold"> | </p>
                     <!-- Custom Delete Button -->
                     <button onclick="confirmDelete()" class="text-red-500 hover:text-red-700 ml-2">@lang('messages.delete')</button>


                </div>
        </div>


   </div>


</div>


    <x-modal.delete key="{{$message->id}}" route="message.destroy" message="{{__('messages.delete_prompt_message')}}" />




</x-layout>
