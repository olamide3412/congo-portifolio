<x-layout>


    <section class="text-center pt-6 mb-10  ">
        <h1 class="font-bold text-4xl uppercase mb-5">@lang('messages.messages')</h1>
        <x-forms.form action="{{ route('message.index') }}">
        <x-forms.input :label="false" value="{{request('q','')}}" name="q" placeholder="{{__('messages.search_message_text')}}"/>
        </x-forms.form>
    </section>


    <div class="space-y-2 md:px-10">


        <div class="hidden md:block overflow-x-auto">
            <div class="min-w-fit">
                <table class="min-w-fit bg-white border">
                    <thead>
                        <tr class="text-left bg-secondary-500 text-white">
                            <th class="py-2 px-4 border">SN</th>
                            <th class="py-2 px-4 border">@lang('messages.ticket')</th>
                            <th class="py-2 px-4 border">@lang('messages.msg_form_name')</th>
                            <th class="py-2 px-4 border">Email</th>
                            <th class="py-2 px-4 border">@lang('messages.msg_form_message')</th>
                            <th class="py-2 px-4 border">@lang('messages.time')</th>
                            <th class="py-2 px-4 border">@lang('messages.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $index => $message)
                            <tr class="hover:bg-gray-100">
                                <td class="py-2 px-4 border">{{ ($messages->currentPage() - 1) * $messages->perPage() + $loop->index + 1 }}</td>
                                <td class="py-2 px-4 border">{{ $message->ticket_number }}</td>
                                <td class="py-2 px-4 border">{{ $message->name }}</td>
                                <td class="py-2 px-4 border">{{ $message->email }}</td>
                                <td class="py-2 px-4 border">{{ $message->message }}</td>
                                <td class="py-2 px-4 border text-nowrap">{{ get_date_time_interval($message->created_at) }}</td>
                                <td class="py-2 px-4 border">
                                    <a href="{{ route('message.show', $message) }}" class="text-secondary-500 hover:text-secondary-700">@lang('messages.view')</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="py-10">
                    {{$messages->links()}}
                </div>
            </div>
        </div>

        <div class="block md:hidden p-5">
            @foreach ($messages as $index => $message)
            <div class="bg-white border rounded-lg mb-4 p-4 shadow-lg">

                <div class="mb-2">
                    <span class="font-bold">@lang('messages.ticket_number'):</span>
                    <span>{{ $message->ticket_number }}</span>
                </div>

                <div class="mb-2">
                    <span class="font-bold">@lang('messages.msg_form_message'):</span>
                    <p class="text-justify">
                        {{ Str::limit($message->message, 100, '...') }}
                        <a href="{{ route('message.show', $message) }}" class="text-secondary-400 hover:text-secondary-700 ">@lang('messages.view')</a>
                    </p>
                </div>
                <div class="mb-2">
                    <span class="font-bold"><i class="fa-solid fa-user"></i></span>
                    <span>{{ $message->name }}</span>
                </div>
                <div class="mb-2">
                    <span class="font-bold"><i class="fa-solid fa-at"></i></span>
                    <span>{{ $message->email }}</span>
                </div>
                <div class="mb-2 flex justify-end">
                    <span>{{ get_date_time_interval($message->created_at) }}</span>
                </div>
            </div>
            @endforeach

            <div class="py-10">
                {{$messages->links()}}
            </div>
        </div>




    </div>











</x-layout>
