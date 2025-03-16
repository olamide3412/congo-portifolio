<form method="POST" action="{{ route('logout') }}">
    @csrf
    @method('DELETE')
    <button>@lang('messages.logout')</button>
</form>
