<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Novo Pedido') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <form>
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="cliente" class="block mb-2 text-sm font-medium text-gray-900">Cliente</label>


                            
{{--                            <select id="cliente" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>--}}
{{--                                @foreach($clientes as $cliente)--}}
{{--                                    <option value="{{$cliente->id}}">--}}
{{--                                        {{$cliente->nome.' '.$cliente->sobrenome. ' - '.substr($cliente->cpf, 0, 3) . '.' . substr($cliente->cpf, 3, 3) . '.' . substr($cliente->cpf, 6, 3) . '-' . substr($cliente->cpf, 9)}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}


                            <x-primary-button
                                x-data=""
                                x-on:click.prevent="$dispatch('open-modal', 'buscar-cliente')"
                            >{{ __('Buscar Cliente') }}</x-primary-button>

                            <x-modal name="buscar-cliente"  focusable>
                                <livewire:cliente-drop-down />
                            </x-modal>
                        </div>
                        <div>
                            <label for="pagamento" class="block mb-2 text-sm font-medium text-gray-900">Forma de Pagamento</label>
                            <input type="text" id="pagamento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" required>
                        </div>
                        <div>
                            <label for="envio" class="block mb-2 text-sm font-medium text-gray-900 ">Forma de Envio</label>
                            <input type="text" id="envio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" required>
                        </div>
                        <div>
                            <label for="vendedor" class="block mb-2 text-sm font-medium text-gray-900">Vendedor</label>
                            <input type="text" id="vendedor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" required>
                        </div>
                        <div>
                            <label for="data" class="block mb-2 text-sm font-medium text-gray-900 ">Data da Venda</label>
                            <input type="date" id="data" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" required>
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="observacao" class="block mb-2 text-sm font-medium text-gray-900">Observação</label>
                        <textarea id="observacao" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" required>
                        </textarea>
                    </div>

                    <div class="flex items-start mb-6">
                        <div class="flex items-center h-5">
                            <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
                        </div>
                        <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>


            </div>
        </div>
    </div>



</x-app-layout>
