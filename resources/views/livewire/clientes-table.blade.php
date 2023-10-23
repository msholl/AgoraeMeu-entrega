<div class="relative overflow-x-auto sm:rounded-lg">
    <label>
{{--        <input type="text" wire:model.live="search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">--}}
        <x-text-input type="search" wire:model.live="search" name="search" placeholder="Buscar" class="w-3/4" />
    </label>


    <table class="w-full mt-2 text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
        <tr>
            <th scope="col" class="px-6 py-3">
                Nome
            </th>
            <th scope="col" class="px-6 py-3">
                CPF
            </th>
            <th scope="col" class="px-6 py-3">
                Email
            </th>
            <th scope="col" class="px-6 py-3">
                Cidade/Estado
            </th>
            <th scope="col" class="px-6 py-3">
                <span class="sr-only">Edit</span>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($clientes as $cliente)
            <tr class="bg-white border-b  hover:bg-gray-50 ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $cliente->nome.' '. $cliente->sobrenome }}
                </th>
                <td class="px-6 py-4 text-gray-700">
                    @php
                        $cpf_formatado =  substr($cliente->cpf, 0, 3) . '.' . substr($cliente->cpf, 3, 3) . '.' . substr($cliente->cpf, 6, 3) . '-' . substr($cliente->cpf, 9);
                    @endphp
                    {{ $cpf_formatado }}
                </td>
                <td class="px-6 py-4 text-gray-700">
                    {{ $cliente->email}}
                </td>
                <td class="px-6 py-4 text-gray-700">
                    {{ $cliente->cidade.'/'. $cliente->estado }}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
