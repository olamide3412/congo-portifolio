<div id="service" class="container mx-auto py-10 px-6  rounded-lg  group">
    @php
        $each_service_div_class = 'bg-white p-6 rounded-lg shadow-md transition-transform duration-500 hover:scale-105 hover:shadow-xl';
    @endphp
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 ">

        @php
            $s_h3_style = 'text-2xl font-semibold mb-4';
        @endphp
        <div class="{{$each_service_div_class}}">
            <h3 class="{{ $s_h3_style }}">@lang('messages.electronic_money_transfer')</h3>
            <p class="text-gray-600 text-justify">@lang('messages.electronic_money_transfer_text') </p>
        </div>

        <div class="{{$each_service_div_class}}">
            <h3 class="{{ $s_h3_style }}">@lang('messages.western_union_transfer')</h3>
            <p class="text-gray-600 text-justify">@lang('messages.western_union_transfer_text')</p>
        </div>
        <div class="{{$each_service_div_class}}">
            <h3 class="{{ $s_h3_style }}">@lang('messages.exchange_to_dollar')</h3>
            <p class="text-gray-600 text-justify">@lang('messages.exchange_to_dollar_text')</p>
        </div>

        <div class="{{$each_service_div_class}}">
            <h3 class="{{ $s_h3_style }}">@lang('messages.cash_express_locally')</h3>
            <p class="text-gray-600 text-justify">@lang('messages.cash_express_locally_text')</p>
        </div>

        <div class="{{$each_service_div_class}}">
            <h3 class="{{ $s_h3_style }}">@lang('messages.fin_tech_consulting')</h3>
            <p class="text-gray-600 text-justify">@lang('messages.fin_tech_consulting_text')</p>
        </div>

        <div class="{{$each_service_div_class}}">
            <h3 class="{{ $s_h3_style }}">@lang('messages.ai_driven_fin_analytics')</h3>
            <p class="text-gray-600 text-justify">@lang('messages.ai_driven_fin_analytics_text')</p>
        </div>

    </div>
</div>
