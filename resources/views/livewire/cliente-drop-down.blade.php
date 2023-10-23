<ul>
    @foreach($clientes as $cliente)
        <li>{{$cliente->nome}}</li>
    @endforeach
</ul>

{{--<x-dropdown align="right" width="48">--}}
{{--    <x-slot name="trigger">--}}
{{--        <input type="text" id="cliente" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" required>--}}
{{--    </x-slot>--}}

{{--    <x-slot name="content" class="overflow-scroll">--}}
{{--        @foreach($clientes as $cliente)--}}
{{--            <x-dropdown-link>--}}
{{--                {{$cliente->nome.' '.$cliente->sobrenome. ' - '.substr($cliente->cpf, 0, 3) . '.' . substr($cliente->cpf, 3, 3) . '.' . substr($cliente->cpf, 6, 3) . '-' . substr($cliente->cpf, 9)}}--}}
{{--            </x-dropdown-link>--}}
{{--        @endforeach--}}
{{--        <x-dropdown-link :href="route('profile.edit')">--}}
{{--            {{ __('Profile') }}--}}
{{--        </x-dropdown-link>--}}

{{--        <!-- Authentication -->--}}
{{--        <form method="POST" action="{{ route('logout') }}">--}}
{{--            @csrf--}}

{{--            <x-dropdown-link :href="route('logout')"--}}
{{--                             onclick="event.preventDefault();--}}
{{--                                                this.closest('form').submit();">--}}
{{--                {{ __('Log Out') }}--}}
{{--            </x-dropdown-link>--}}
{{--        </form>--}}
{{--    </x-slot>--}}
{{--</x-dropdown>--}}
