<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nova Categoria') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-6 gap-4">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __('Categorias') }}

                    </div>
                    <div class="flex">

                        <a href="{{route('transactions.create')}}"
                            class="min-w-max shadow-black shadow-sm bg-green-700 hover:bg-green-900 text-white text-xs mx-1 py-2 px-3 rounded h-8 self-center">
                            {{ __('Nova Transação') }}
                        </a>

                    </div>
                </div>
                @if (session('msg'))
                <div class="bg-green-300 text-black font-bold text-center">{{session('msg')}}</div>
                @endif
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-col  overflow-x-hidden">
                        <div class="sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-x-auto">

                                    <table class=" min-w-full text-left text-sm font-light">
                                        <thead class="border-b font-medium dark:border-neutral-500">
                                            <tr class="bg-slate-200">
                                                <th scope="col" class="px-6 py-4">Nome</th>
                                                <th scope="col" class="px-6 py-4">Descrição</th>
                                                <th scope="col" class="px-6 py-4">Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <form action="{{route('categories.store')}}" method="POST">
                                                @csrf
                                                <tr class="border-b dark:border-neutral-500 hover:bg-neutral-100">

                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        <input type="text" name="name" id="" required>
                                                    </td>
                                                    <td class="whitespace-wrap max-w-full px-6 py-4">
                                                        <input type="text" name="description" id="" required
                                                            class="w-full whitespace-wrap">
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        <button type="submit"
                                                            class="shadow-black shadow-sm bg-red-700 hover:bg-red-900 text-white text-xs mx-1 py-2 px-3 rounded">Salvar</button>
                                                        <a href=""
                                                            class="shadow-black shadow-sm bg-red-700 hover:bg-red-900 text-white text-xs mx-1 py-2 px-3 rounded">Cancelar</a>
                                                    </td>
                                                </tr>
                                            </form>
                                        </tbody>
                                        <tbody>
                                            @foreach ($categories as $category)
                                            <tr class="border-b dark:border-neutral-500 hover:bg-neutral-100">
                                                <form action="{{route('categories.edit',$category->id)}}" method="GET">
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        <p>{{$category->name}}</p>
                                                    </td>
                                                    <td class="whitespace-wrap px-6 py-4">
                                                        <p>{{$category->description}}</p>
                                                    </td>
                                                    <td class="whitespace-nowrap px-6 py-4">
                                                        <button type="submit"
                                                            class="shadow-black shadow-sm bg-red-700 hover:bg-red-900 text-white text-xs mx-1 py-2 px-3 rounded">Editar</button>
                                                    </td>
                                                </form>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>