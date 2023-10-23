<div class="relative overflow-x-auto sm:rounded-lg">
{{--    @php(dd($pedidos))--}}
    <label>
        {{--        <input type="text" wire:model.live="search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">--}}
        <x-text-input type="search" wire:model.live="search" name="search" placeholder="Buscar" class="w-3/4" />
    </label>


    <table class="w-full mt-2 text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
        <tr>
            <th scope="col" class="px-6 py-3">
                Nº Pedido
            </th>
            <th scope="col" class="px-6 py-3">
                Cliente
            </th>
            <th scope="col" class="px-6 py-3">
                Envio
            </th>
            <th scope="col" class="px-6 py-3">
                Status
            </th>
            <th scope="col" class="px-6 py-3">
                Data
            </th>
            <th scope="col" class="px-6 py-3">
                <span class="sr-only">Edit</span>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($pedidos as $pedido)
            <tr class="bg-white border-b  hover:bg-gray-50 ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $pedido->id }}
                </th>
                <td class="px-6 py-4 text-gray-700">
                    {{ $pedido->cliente_nome }}
                </td>
                <td class="px-6 py-4 text-gray-700">
                    {{ $pedido->envio}}
                </td>
                <td class="px-6 py-4 ">
                    @php($cor = ['enviado' => 'green', 'aguardando' => 'amber', 'cancelado' => 'red'])

                    <span class="rounded-full bg-{{$cor[$pedido->status]}}-50 px-2 py-1 text-{{$cor[$pedido->status]}}-600">
                        {{ $pedido->status }}
                    </span>
                </td>
                <td class="px-6 py-4 text-gray-700">
                    {{ date('d/m/Y', strtotime($pedido->data)) }}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
