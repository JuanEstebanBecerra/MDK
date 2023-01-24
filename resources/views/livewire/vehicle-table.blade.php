<div class="flex justify-center mt-20" style="font-size:{{ $this->fontSize }}px">
    <div class="max-w-[85vw] overflow-auto">

        <h1 style="font-size: 30px;" class="dark:text-white">Vehiculos</h1>

        <div class="">

            <div class="absolute right-0 rounded-xl flex flex-col justify-center items-center text-white">


                <x-jet-dropdown align="right" width="48" class="" closeClick="open">
                    <x-slot name="trigger">
                        <span class="inline-flex rounded-md">
                            <button type="button"
                                class="inline-flex items-center p-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-800 hover:bg-red-700 focus:bg-red-900 focus:outline-none transition shadow-[0px_8px_10px_0px_rgba(0,0,0,0.3)] w-10 h-10 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                    <title>Accessibility</title>
                                    <path fill="currentColor" stroke="currentColor"
                                        d="M256 112a56 56 0 1156-56 56.06 56.06 0 01-56 56z" />
                                    <path fill="currentColor" stroke="currentColor"
                                        d="M432 112.8l-.45.12-.42.13c-1 .28-2 .58-3 .89-18.61 5.46-108.93 30.92-172.56 30.92-59.13 0-141.28-22-167.56-29.47a73.79 73.79 0 00-8-2.58c-19-5-32 14.3-32 31.94 0 17.47 15.7 25.79 31.55 31.76v.28l95.22 29.74c9.73 3.73 12.33 7.54 13.6 10.84 4.13 10.59.83 31.56-.34 38.88l-5.8 45-32.19 176.19q-.15.72-.27 1.47l-.23 1.27c-2.32 16.15 9.54 31.82 32 31.82 19.6 0 28.25-13.53 32-31.94s28-157.57 42-157.57 42.84 157.57 42.84 157.57c3.75 18.41 12.4 31.94 32 31.94 22.52 0 34.38-15.74 32-31.94a57.17 57.17 0 00-.76-4.06L329 301.27l-5.79-45c-4.19-26.21-.82-34.87.32-36.9a1.09 1.09 0 00.08-.15c1.08-2 6-6.48 17.48-10.79l89.28-31.21a16.9 16.9 0 001.62-.52c16-6 32-14.3 32-31.93S451 107.81 432 112.8z" />
                                </svg>
                            </button>
                        </span>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Tamaño de fuente') }}
                        </div>
                        <div class="flex">
                            <button
                                class="w-full text-center block px-2 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition"
                                wire:click="fontSizeSmaller()">
                                -
                            </button>
                            <div class="flex jusvv tify-center items-center px-5">
                                {{ $fontSize }}
                            </div>
                            <button
                                class="w-full text-center block px-2 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition"
                                wire:click="fontSizeBigger()">
                                +
                            </button>
                        </div>

                    </x-slot>
                </x-jet-dropdown>
            </div>

            <div class="m-2 p-2 relative ">


                <div
                    class="w-full bg-zinc-800 dark:bg-zinc-900 sm:flex items-center place-content-between p-5 relative rounded-t-xl">
                    <div class="flex max-sm:flex-col gap-5 items-center">
                        <div class="flex items-center flex-wrap justify-center gap-2">
                        <p class="text-white flex items-center">
                            Buscar

                            <button class="w-5 h-5" wire:click="showHowToSearchModal()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                    <title>¿Como funciona la busqueda?</title>
                                    <path d="M256 80a176 176 0 10176 176A176 176 0 00256 80z" fill="none"
                                        stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                    <path
                                        d="M200 202.29s.84-17.5 19.57-32.57C230.68 160.77 244 158.18 256 158c10.93-.14 20.69 1.67 26.53 4.45 10 4.76 29.47 16.38 29.47 41.09 0 26-17 37.81-36.37 50.8S251 281.43 251 296"
                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-miterlimit="10" stroke-width="28" />
                                    <circle fill="currentColor" stroke="currentColor" cx="250" cy="348"
                                        r="20" />
                                </svg>
                            </button>
                        </p>
                        <input wire:model="search" type="search" placeholder="id, placa, modelo, id del cliente"
                            class="rounded max-sm:w-full dark:bg-zinc-800 dark:text-white focus:border-red-800 focus:ring-red-800">
                        </div>
                        <div class="flex gap-5 max-sm:flex-col items-center justify-center flex-wrap">
                            <x-jet-dropdown align="left" width="48">
                                <x-slot name="trigger">
                                    <span class="inline-flex rounded-md">
                                        <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-800 hover:bg-red-700 focus:bg-red-900 focus:outline-none transition shadow-[0px_8px_10px_0px_rgba(0,0,0,0.3)]">
                                            Filtrar:
                                            @if ($filter == 1)
                                                Activos
                                            @elseif($filter == 0)
                                                Inactivos
                                            @else
                                                Todos
                                            @endif

                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </span>
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Estado') }}
                                    </div>
                                    <button
                                        class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition"
                                        wire:click="filter('')">
                                        Todos
                                    </button>
                                    <button
                                        class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition"
                                        wire:click="filter(1)">
                                        Activos
                                    </button>
                                    <button
                                        class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition"
                                        wire:click="filter(0)">
                                        Inactivos
                                    </button>
                                </x-slot>
                            </x-jet-dropdown>

                            <x-jet-dropdown align="left" width="48">
                                <x-slot name="trigger">
                                    <span class="inline-flex rounded-md">
                                        <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-800 hover:bg-red-700 focus:bg-red-900 focus:outline-none transition shadow-[0px_8px_10px_0px_rgba(0,0,0,0.3)]">
                                            Elementos: {{ $paginate }}

                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </span>
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Elementos por página') }}
                                    </div>
                                    <button
                                        class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition"
                                        wire:click="changePaginate(5)">
                                        5
                                    </button>
                                    <button
                                        class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition"
                                        wire:click="changePaginate(10)">
                                        10
                                    </button>
                                    <button
                                        class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition"
                                        wire:click="changePaginate(15)">
                                        15
                                    </button>
                                    <button
                                        class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition"
                                        wire:click="changePaginate('')">
                                        Todos
                                    </button>
                                </x-slot>
                            </x-jet-dropdown>


                            <x-jet-dropdown align="left" closeClick="open" width="48">
                                <x-slot name="trigger">
                                    <span class="inline-flex rounded-md">
                                        <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-800 hover:bg-red-700 focus:bg-red-900 focus:outline-none transition shadow-[0px_8px_10px_0px_rgba(0,0,0,0.3)]">
                                            Columnas

                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </span>
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        Columnas
                                    </div>
                                    <button
                                        class="grid grid-cols-2 w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition"
                                        wire:click="changeField('fieldId')">
                                        <p class="">Id</p>
                                        <input type="checkbox"
                                            class="checked:bg-red-800 focus:ring-red-800 text-red-800 justify-self-center"
                                            @if ($fieldId) checked @endif>
                                    </button>
                                    <button
                                        class="grid grid-cols-2 w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition"
                                        wire:click="changeField('fieldCustomer_id')">
                                        <p class="">Propietario</p>
                                        <input type="checkbox"
                                            class="checked:bg-red-800 focus:ring-red-800 text-red-800 justify-self-center"
                                            @if ($fieldCustomer_id) checked @endif>
                                    </button>
                                    <button
                                        class="grid grid-cols-2 w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition"
                                        wire:click="changeField('fieldPlate')">
                                        <p class="">Placa</p>
                                        <input type="checkbox"
                                            class="checked:bg-red-800 focus:ring-red-800 text-red-800 justify-self-center"
                                            @if ($fieldPlate) checked @endif>
                                    </button>
                                    <button
                                        class="grid grid-cols-2 w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition"
                                        wire:click="changeField('fieldModel')">
                                        <p class="">Modelo</p>
                                        <input type="checkbox"
                                            class="checked:bg-red-800 focus:ring-red-800 text-red-800 justify-self-center"
                                            @if ($fieldModel) checked @endif>
                                    </button>
                                    <button
                                        class="grid grid-cols-2 w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition"
                                        wire:click="changeField('fieldStatus')">
                                        <p class="">Estado</p>
                                        <input type="checkbox"
                                            class="checked:bg-red-800 focus:ring-red-800 text-red-800 justify-self-center"
                                            @if ($fieldStatus) checked @endif>
                                </x-slot>
                            </x-jet-dropdown>
                            @if ($selecteds)
                                <x-jet-dropdown align="left" width="48">
                                    <x-slot name="trigger">
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-800 hover:bg-red-700 focus:bg-red-900 focus:outline-none transition shadow-[0px_8px_10px_0px_rgba(0,0,0,0.3)]">
                                                Exportar

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </x-slot>
                                    <x-slot name="content">
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Formato') }}
                                        </div>
                                        <button
                                            class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition"
                                            wire:click="exportExcel()">
                                            Excel
                                        </button>
                                        <button
                                            class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition"
                                            wire:click="exportCsv()">
                                            CSV
                                        </button>
                                        <a href="/vehiclePdf/{{ $this->encryption }}" target="blank">
                                            <button
                                                class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition">
                                                PDF
                                            </button>
                                        </a>

                                    </x-slot>
                                </x-jet-dropdown>
                            @endif
                        </div>
                    </div>
                    @if (Auth::user()->job != 'M')
                        <x-jet-button wire:click="showVehicleModal"
                            class="bg-red-800 hover:bg-red-900 active:bg-red-700 max-sm:mt-5 max-sm:w-full flex justify-center imtems-center sm:ml-5">
                            Registrar</x-jet-button>
                    @endif

                </div>
                <div class="-my-2 overflow-x-auto">
                    <div class="py-2 align-middle inline-block min-w-full
          ">
                        <div class="bg-zinc-800 dark:bg-zinc-900 overflow-hidden">

                            <table class="w-full divide-y divide-gray-200 ">
                                <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">

                                    <tr>
                                        <th class="bg-zinc-800 dark:bg-zinc-900">
                                            <div>
                                                <input type="checkbox" value="4"
                                                    wire:change="selectAll($event.target.value)"
                                                    class="checked:bg-red-800 focus:ring-red-800 text-red-800"
                                                    @if ($this->isSelectedAll == 0) checked @endif>
                                            </div>
                                        </th>
                                        @if ($fieldId)
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 dark:bg-zinc-900 cursor-pointer hover:bg-red-800 hover:underline"
                                                wire:click="sortBy('id')">
                                                <div class="flex">Id<svg
                                                        class="h-4 w-4 @if ($sortField != 'id') opacity-0 @endif
                        @if ($sortDirection == 'desc') rotate-180 @endif
                        "
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg></div>
                                            </th>
                                        @endif
                                        @if ($fieldCustomer_id)
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 dark:bg-zinc-900 cursor-pointer hover:bg-red-800 hover:underline"
                                                wire:click="sortBy('customer_id')">
                                                <div class="flex">Propietario<svg
                                                        class="h-4 w-4 @if ($sortField != 'customer_id') opacity-0 @endif
                        @if ($sortDirection == 'desc') rotate-180 @endif
                        "
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg></div>
                                            </th>
                                        @endif
                                        @if ($fieldPlate)
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 dark:bg-zinc-900 cursor-pointer hover:bg-red-800 hover:underline"
                                                wire:click="sortBy('plate')">
                                                <div class="flex">Placa<svg
                                                        class="h-4 w-4 @if ($sortField != 'plate') opacity-0 @endif
                        @if ($sortDirection == 'desc') rotate-180 @endif
                        "
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg></div>
                                            </th>
                                        @endif
                                        @if ($fieldModel)
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 dark:bg-zinc-900 cursor-pointer hover:bg-red-800 hover:underline"
                                                wire:click="sortBy('model')">
                                                <div class="flex">Modelo<svg
                                                        class="h-4 w-4 @if ($sortField != 'modelo') opacity-0 @endif
                        @if ($sortDirection == 'desc') rotate-180 @endif
                        "
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg></div>
                                            </th>
                                        @endif
                                        @if ($fieldStatus)
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 dark:bg-zinc-900 cursor-pointer hover:bg-red-800 hover:underline"
                                                wire:click="sortBy('status')">
                                                <div class="flex">Estado<svg
                                                        class="h-4 w-4 @if ($sortField != 'status') opacity-0 @endif
                        @if ($sortDirection == 'desc') rotate-180 @endif
                        "
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg></div>
                                            </th>
                                        @endif
                                        @if (Auth::user()->job == 'A')
                                            <th scope="col"
                                                class="px-6 py-3 text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 dark:bg-zinc-900">
                                                Editar</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-neutral-800 dark:text-white">
                                    @foreach ($vehicles as $vehicle)
                                        <tr
                                            class="
                    @if (in_array($vehicle->id, $selecteds)) bg-zinc-300 dark:bg-neutral-700 @endif">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <input type="checkbox"
                                                    wire:change="addToSelecteds({{ $vehicle->id }})"
                                                    class="checked:bg-red-800 focus:ring-red-800 text-red-800"
                                                    @if (in_array($vehicle->id, $selecteds)) checked @endif>
                                            </td>
                                            @if ($fieldId)
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="max-w-[12rem] overflow-x-auto">{{ $vehicle->id }}
                                                    </div>
                                                </td>
                                            @endif
                                            @if ($fieldCustomer_id)
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="max-w-[12rem] overflow-x-auto">
                                                        <?php
                                                        echo $this->searchCustomer($vehicle->customer_id);
                                                        ?>
                                                    </div>
                                                </td>
                                            @endif
                                            @if ($fieldPlate)
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="max-w-[12rem] overflow-x-auto">{{ $vehicle->plate }}
                                                    </div>
                                                </td>
                                            @endif
                                            @if ($fieldModel)
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="max-w-[12rem] overflow-x-auto">{{ $vehicle->model }}
                                                    </div>
                                                </td>
                                            @endif
                                            @if ($fieldStatus)
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    @if ($vehicle->status == '1')
                                                        Activo
                                                    @else
                                                        Inactivo
                                                    @endif
                                                </td>
                                            @endif
                                            @if (Auth::user()->job == 'A')
                                                <td class="group px-6 py-4 text-right text-sm flex justify-end gap-2">
                                                
                                                    @if ($vehicle->reports>0)
                                                    <x-jet-button
                                                        wire:click="showReportsVehicleModal({{ $vehicle->id }})" title="Reportes"
                                                        class="bg-zinc-800 dark:bg-zinc-900 hover:bg-zinc-900 active:bg-zinc-700">
                                                        <div class=" w-4 h-4 flex justify-center items-center gap-2 overflow-hidden">
                                                        {{$vehicle->reports}}
                                                        <div class="w-4 h-4 group-hover:translate-y-5 duration-200 bg-zinc-800 dark:bg-zinc-900 absolute group-hover:opacity-0"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512" fill="currentColor"><title>Document</title><path d="M428 224H288a48 48 0 01-48-48V36a4 4 0 00-4-4h-92a64 64 0 00-64 64v320a64 64 0 0064 64h224a64 64 0 0064-64V228a4 4 0 00-4-4z"/><path d="M419.22 188.59L275.41 44.78a2 2 0 00-3.41 1.41V176a16 16 0 0016 16h129.81a2 2 0 001.41-3.41z"/></svg></div>
                                                        </div>
                                                        </x-jet-button>
                                                    @endif
                                                    <x-jet-button
                                                        wire:click="showEditVehicleModal({{ $vehicle->id }})"
                                                        class="bg-zinc-800 dark:bg-zinc-900 hover:bg-zinc-900 active:bg-zinc-700">
                                                        Editar</x-jet-button>
                                                    <x-jet-button wire:click="delete({{ $vehicle->id }})"
                                                        class="bg-red-800 hover:bg-red-900 active:bg-red-700">
                                                        @if ($vehicle->status == 0)
                                                            Activar
                                                        @else
                                                            Desactivar
                                                        @endif
                                                    </x-jet-button>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    <!-- More items... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="p-2 bg-zinc-800 dark:bg-zinc-900 rounded-b-2xl mt-2">
                    {{ $vehicles->links() }}
                </div>

            </div>
            <div>
                <x-jet-dialog-modal wire:model="showingVehicleModal">
                    @if ($isEditMode)
                        <x-slot name="title">Editar Vehiculo</x-slot>
                    @elseif($isHowToSearchMode)
                        <x-slot name="title">¿Como funciona la busqueda?</x-slot>
                    @elseif($isReportsMode)
                        <x-slot name="title">Reportes de vehiculo</x-slot>
                    @else
                        <x-slot name="title">Registrar vehiculo</x-slot>
                    @endif
                    <x-slot name="content">

                        <div class="space-y-8 divide-y divide-gray-200 mt-10">
                            @if ($isHowToSearchMode)
                                Puedes buscar:<br>
                                Placa, <br>
                                Modelo, <br>
                                Id del cliente,<br>
                                Ten en cuenta que filtro de estado lo estas utilizando.
                            @elseif($isReportsMode)
                                <div class="w-full h-20 bg-zinc-200 dark:bg-zinc-600 rounded-xl p-5 flex justify-between items-center">
                                    <p>Selecciona un reporte:</p>
                                    <input type="text" value="{{ $this->report }}"
                                                wire:change="setReportNpt($event.target.value)"
                                                class="h-0 w-0 invisible border-0 border-black dark:border-white bg-zinc-200 dark:bg-zinc-600 border-b ring-0 focus:ring-0 focus:border-black">
                                    
                                    <input type="text" list="reports" wire:model.lazy="Npt"
                                                wire:change="setReport($event.target.value)"
                                                class="max-sm:w-full border-0 border-black dark:border-white bg-zinc-200 dark:bg-zinc-600 border-b ring-0 focus:ring-0 focus:border-black">
                                    <datalist id="reports">
                                        @foreach ($this->reports as $report)
                                            <option value="{{ $report->id }}">{{ $report->created_at }}
                                                    </option>
                                        @endforeach
                                    </datalist>
                                </div>
                                    @if($this->report!='')
                                        <div class="w-full p-5 bg-zinc-200 dark:bg-zinc-600 rounded-xl grid grid-cols-2">
                                            <p>Creador: </p>
                                                <p>
                                                @foreach($this->reports as $report)
                                                <?php
                                                echo $this->searchUser($report->user_id);
                                                ?>
                                                @endforeach
                                                </p>
                                            
                                            <p>Fecha: </p>
                                                <p>{{$report->created_at}}</p>
                                            
                                            <p>Cliente: </p>
                                                <p><?php
                                                    echo $this->searchCustomer($report->customer_id);
                                                ?></p>
                                            
                                            <p>Vehiculo: </p>
                                                <p><?php
                                                    echo $this->searchVehicle($report->vehicle_id);
                                                ?>  </p>
                                            
                                        </div>

                                        <div class="w-full p-5 bg-zinc-200 dark:bg-zinc-600 rounded-xl flex flex-col gap-5">
                                            <p>Reporte de ingreso</p>
                                            <p>{{$report->prev}}</p>
                                        </div>

                                        <div class="w-full p-5 bg-zinc-200 dark:bg-zinc-600 rounded-xl flex flex-col gap-5">
                                            <p>Reporte de salida</p>
                                            <p>{{$report->post}}</p>
                                        </div>

                                        <div class="w-full p-5 bg-zinc-200 dark:bg-zinc-600 rounded-xl max-sm:flex max-sm:flex-col max-sm:gap-2 sm:grid grid-cols-4">
                                            <div>
                                                <p>Tipo de aceite:</p>
                                                <p>{{$report->oilType}}</p>
                                            </div>
                                            <div>
                                                <p>Caja:</p>
                                                <p>{{$report->boxType}}</p>
                                            </div>
                                            <div>
                                                <p>Diferencial:</p>
                                                <p>{{$report->difType}}</p>
                                            </div>
                                            <div>
                                                <p>Filtro:</p>
                                                <ul class="list-disc">
                                                    @if (in_array('1', $this->oilFilterTypeArr))
                                                        @if ($this->oilFilterTypeArr[0] == 1)
                                                            <li class="">Aceite</li>
                                                        @endif
                                                        @if ($this->oilFilterTypeArr[1] == 1)
                                                            <li class="">Aire motor</li>
                                                        @endif
                                                        @if ($this->oilFilterTypeArr[2] == 1)
                                                            <li class="">Aire cabina</li>
                                                        @endif
                                                        @if ($this->oilFilterTypeArr[3] == 1)
                                                            <li class="">Combustible</li>
                                                        @endif
                                                    @else
                                                        Ninguno
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="w-full p-5 bg-zinc-200 dark:bg-zinc-600 rounded-xl flex flex-col gap-5 overflow-x-auto">
                                            <p>Productos</p>
                                            <table class="w-full h-full">
                                                <thead>
                                                    <tr>
                                                        <th class="p-5">
                                                            ID
                                                        </th>
                                                        <th class="p-5">
                                                            Nombre
                                                        </th>
                                                        <th class="p-5">
                                                            Valor unitario
                                                        </th>
                                                        <th class="p-5">
                                                            Cantidad
                                                        </th>
                                                        <th class="p-5">
                                                            Subtotal
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($this->report_ProductsAmmountArrFinal as $product)
                                                        <tr>
                                                            <th class="p-5">
                                                                {{ $product[0] }}
                                                            </th>
                                                            <th class="p-5">
                                                                <?php
                                                                echo $this->searchProduct($product[0], 'name');
                                                                ?>
                                                            </th>
                                                            <th class="p-5">
                                                                <?php
                                                                echo $this->searchProduct($product[0], 'price');
                                                                ?>
                                                            </th>
                                                            <th class="p-5">
                                                                {{ $product[1] }}
                                                            </th>
                                                            <th class="p-5">
                                                                {{ $product[2] }}
                                                            </th>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot class="border-0 border-t border-black dark:border-white">
                                                    <tr>
                                                        <th>

                                                        </th>
                                                        <th>

                                                        </th>
                                                        <th>

                                                        </th>
                                                        <th class="p-5">
                                                            Total:
                                                        </th>
                                                        <th class="p-5">
                                                            ${{ $this->report_ProductsTotal }}
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="w-full p-5 bg-zinc-200 dark:bg-zinc-600 rounded-xl flex flex-col gap-5">
                                            <p>Procedimientos</p>
                                            <table class="w-full h-full">
                                                <thead>
                                                    <tr>
                                                        <th class="p-5">
                                                            Trabajo
                                                        </th>
                                                        <th class="p-5">
                                                            Precio
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($this->report_ProceduresArrFinal as $procedure)
                                                        <tr>
                                                            <th class="p-5">
                                                                {{ $procedure[0] }}
                                                            </th>
                                                            <th class="p-5">
                                                                {{ $procedure[1] }}
                                                            </th>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot class="border-0 border-t border-black dark:border-white">
                                                    <tr>
                                                        <th class="p-5">
                                                            Total:
                                                        </th>
                                                        <th class="p-5">
                                                            ${{ $this->report_ProceduresTotal }}
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="w-full p-5 bg-zinc-200 dark:bg-zinc-600 rounded-xl flex flex-col gap-5">
                                            <p>Observaciones</p>
                                            <p>{{$report->observations}}</p>
                                        </div>
                                        <div class="p-5 flex justify-end w-auto items-center gap-5">
                                            <div class="p-5 bg-zinc-200 dark:bg-zinc-600 rounded-xl flex gap-5">
                                            <p>Total:</p>
                                            <p>${{$report->report_ProductsTotal+$this->report_ProceduresTotal}}</p>
                                            </div>
                                        </div>
                                    @endif
                            @else
                                <div class="flex flex-col">
                                    <form enctype="multipart/form-data">
                                        <p>Información</p>
                                        <div class="sm:flex place-content-around m-2">
                                            <div>
                                                <div class="sm:col-span-6">
                                                    <label for="customer_id"
                                                        class="block text-sm font-medium text-gray-700 dark:text-white dark:text-white">
                                                        Propietario </label>
                                                    <div class="mt-1">
                                                            <input type="text" value="{{$this->selectedCustomer}}" list="customers" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5 dark:bg-zinc-800 dark:text-white" wire:change="setCustomer($event.target.value)" wire:model.lazy="customerInput">
                                                        

                                                            <datalist id="customers">
                                                            @foreach($this->customers as $customer)
                                                            <option value="{{$customer->id}}">{{$customer->name}}</option>
                                                            @endforeach
                                                            </datalist>
                                                    </div>
                                                    @error('customer_id')
                                                        <span class="error text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="sm:col-span-6">
                                                    <label for="plate"
                                                        class="block text-sm font-medium text-gray-700 dark:text-white dark:text-white">
                                                        Placa </label>
                                                    <div class="mt-1">
                                                        <input type="text" id="plate"
                                                            wire:model.lazy="plate" name="plate"
                                                            class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5 dark:bg-zinc-800 dark:text-white" />
                                                    </div>
                                                    @error('plate')
                                                        <span class="error text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="sm:col-span-6">
                                                    <label for="model"
                                                        class="block text-sm font-medium text-gray-700 dark:text-white dark:text-white">
                                                        Modelo </label>
                                                    <div class="mt-1">
                                                        <input type="text" id="model"
                                                            wire:model.lazy="model" name="model"
                                                            class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5 dark:bg-zinc-800 dark:text-white" />
                                                    </div>
                                                    @error('model')
                                                        <span class="error text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div>
                                                @if ($idVehicle != 1)
                                                    <div class="sm:col-span-6">
                                                        <label for="status"
                                                            class="block text-sm font-medium text-gray-700 dark:text-white dark:text-white">
                                                            Estado </label>
                                                        <div class="mt-1">
                                                            <select id="status" wire:model.lazy="status"
                                                                name="status"
                                                                class="block w-full appearance-none bg-white dark:bg-zinc-800 dark:text-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5 dark:bg-zinc-800 dark:text-white">
                                                                <option value="1">Activo</option>
                                                                <option value="0">Inactivo</option>
                                                            </select>
                                                        </div>
                                                        <input type="number" id="customer_id"
                                                            wire:model.lazy="customer_id" name="customer_id"
                                                            class="w-0 h-0 invisible p-0 m-0" />
                                                    </div>
                                                @endif

                                            </div>
                                    </form>
                                </div>
                        </div>
                        @endif
            </div>

            </x-slot>
            <x-slot name="footer">
                <div class="w-full flex gap-5 place-content-between">
                    @if ($isEditMode)
                        <x-jet-button wire:click="modalEditFormReset"
                            class="bg-zinc-800 dark:bg-zinc-900 hover:bg-zinc-900 active:bg-zinc-700">Reset
                        </x-jet-button>
                    @elseif($isHowToSearchMode)
                        <x-jet-button class="invisible">Reset</x-jet-button>
                    @elseif($isReportsMode)
                        <x-jet-button class="invisible">Reset</x-jet-button>
                    @else
                        <x-jet-button wire:click="modalRegFormReset"
                            class="bg-zinc-800 dark:bg-zinc-900 hover:bg-zinc-900 active:bg-zinc-700">Reset
                        </x-jet-button>
                    @endif
                    <div>
                        @if ($isEditMode)
                            <x-jet-button wire:click="updateVehicle"
                                class="bg-red-800 hover:bg-red-900 active:bg-red-700">Actualizar</x-jet-button>
                        @elseif($isHowToSearchMode)
                        @elseif($isReportsMode)
                        @else
                            <x-jet-button wire:click="saveVehicle"
                                class="bg-red-800 hover:bg-red-900 active:bg-red-700">Guardar</x-jet-button>
                        @endif
                        <x-jet-button wire:click="hideModal" type="button"
                            class="bg-zinc-800 dark:bg-zinc-900 hover:bg-zinc-900 active:bg-zinc-700">Cerrar
                        </x-jet-button>
                    </div>
                </div>
            </x-slot>
            </x-jet-dialog-modal>

        </div>
    </div>
</div>
@if ($selecteds)
    <div class="fixed top-32 left-5">
        <x-jet-dropdown align="left" closeClick="open" width="">
            <x-slot name="trigger">
                <span class="inline-flex rounded-md">
                    <button type="button"
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-800 hover:bg-red-700 focus:bg-red-900 focus:outline-none transition shadow-[0px_8px_10px_0px_rgba(0,0,0,0.3)]">

                        Seleccionados

                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </span>
            </x-slot>

            <x-slot name="content">
                <!-- Account Management -->
                <div class="flex gap-5 items-center px-4 py-2 text-xs text-gray-400">
                    Seleccionados
                    <x-jet-button wire:click="deselectAll()"
                        class="bg-red-800 hover:bg-red-900 active:bg-red-700 max-sm:w-full flex justify-center imtems-center">
                        Deseleccionar</x-jet-button>
                </div>
                <div class="flex flex-wrap gap-2 overflow-y-auto max-h-28 px-2 py-2">
                    @foreach ($selecteds as $selected)
                        <button
                            class="selected-container relative bg-red-800 hover:bg-red-900 active:bg-red-700 cursor-pointer w-8 h-8 flex justify-center items-center text-white rounded-md overflow-hidden"
                            wire:click="addToSelecteds({{ $selected }})">
                            X
                            <div
                                class="selected-value opacity-100 w-full h-full absolute flex justify-center items-center rounded-md bg-red-800 duration-500">
                                {{ $selected }}
                            </div>
                        </button>
                    @endforeach
                </div>
            </x-slot>
        </x-jet-dropdown>
    </div>
@endif
</div>
<script>
    window.onload = function() {
        PrintElem();
    }
</script>
