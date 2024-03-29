<div class="flex justify-center mt-20" style="font-size:{{ $this->fontSize }}px">
    <div class="max-w-[85vw] overflow-auto">

        <h1 style="font-size: 30px;" class="dark:text-white">Productos</h1>

        <div class="py-5">

            <div class="absolute right-0 rounded-xl flex flex-col justify-center items-center text-white">


                <x-jet-dropdown align="right" width="48" class="" closeClick="open">
                    <x-slot name="trigger">
                        <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center p-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-800 hover:bg-red-700 focus:bg-red-900 focus:outline-none transition shadow-[0px_8px_10px_0px_rgba(0,0,0,0.3)] w-10 h-10 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Accessibility</title><path fill="currentColor" stroke="currentColor" d="M256 112a56 56 0 1156-56 56.06 56.06 0 01-56 56z"/><path fill="currentColor" stroke="currentColor" d="M432 112.8l-.45.12-.42.13c-1 .28-2 .58-3 .89-18.61 5.46-108.93 30.92-172.56 30.92-59.13 0-141.28-22-167.56-29.47a73.79 73.79 0 00-8-2.58c-19-5-32 14.3-32 31.94 0 17.47 15.7 25.79 31.55 31.76v.28l95.22 29.74c9.73 3.73 12.33 7.54 13.6 10.84 4.13 10.59.83 31.56-.34 38.88l-5.8 45-32.19 176.19q-.15.72-.27 1.47l-.23 1.27c-2.32 16.15 9.54 31.82 32 31.82 19.6 0 28.25-13.53 32-31.94s28-157.57 42-157.57 42.84 157.57 42.84 157.57c3.75 18.41 12.4 31.94 32 31.94 22.52 0 34.38-15.74 32-31.94a57.17 57.17 0 00-.76-4.06L329 301.27l-5.79-45c-4.19-26.21-.82-34.87.32-36.9a1.09 1.09 0 00.08-.15c1.08-2 6-6.48 17.48-10.79l89.28-31.21a16.9 16.9 0 001.62-.52c16-6 32-14.3 32-31.93S451 107.81 432 112.8z"/></svg>
                                    </button>
                                </span>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Tamaño de fuente') }}
                        </div>
                        <div class="flex">
                            <button class="w-full text-center block px-2 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="fontSizeSmaller()">
                                -
                            </button>
                            <div class="flex justify-center items-center px-5">
                                {{ $fontSize }}
                            </div>
                            <button class="w-full text-center block px-2 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="fontSizeBigger()">
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
                    <path d="M256 80a176 176 0 10176 176A176 176 0 00256 80z" fill="none" stroke="currentColor"
                      stroke-miterlimit="10" stroke-width="32" />
                    <path
                      d="M200 202.29s.84-17.5 19.57-32.57C230.68 160.77 244 158.18 256 158c10.93-.14 20.69 1.67 26.53 4.45 10 4.76 29.47 16.38 29.47 41.09 0 26-17 37.81-36.37 50.8S251 281.43 251 296"
                      fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                      stroke-width="28" />
                    <circle fill="currentColor" stroke="currentColor" cx="250" cy="348" r="20" />
                  </svg>
                </button>
              </p>
              <input wire:model="search" type="search"
                placeholder="Nombre, cantidad, precio, fecha, id, proveedor, numero de factura"
                class="rounded max-sm:w-full dark:bg-zinc-800 dark:text-white focus:border-red-800 focus:ring-red-800">
                </div>
                        <div class="flex gap-5 max-sm:flex-col items-center justify-center flex-wrap">
                            <x-jet-dropdown align="left" width="48">
                                <x-slot name="trigger">
                        <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-800 hover:bg-red-700 focus:bg-red-900 focus:outline-none transition shadow-[0px_8px_10px_0px_rgba(0,0,0,0.3)]">
                                        Filtrar:
                                        @if($filter==1)
                                            Activos
                                        @elseif($filter==0)
                                            Inactivos
                                        @else
                                            Todos
                                        @endif

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Estado') }}
                                    </div>
                                    <button class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="filter('')">
                                        Todos
                                    </button>
                                    <button class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="filter(1)">
                                        Activos
                                    </button>
                                    <button class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="filter(0)">
                                        Inactivos
                                    </button>
                                </x-slot>
                            </x-jet-dropdown>

                            <x-jet-dropdown align="left" width="48">
                                <x-slot name="trigger">
                        <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-800 hover:bg-red-700 focus:bg-red-900 focus:outline-none transition shadow-[0px_8px_10px_0px_rgba(0,0,0,0.3)]">
                                        Tipo:
                                        @if($filterType=='C')
                                            Compras
                                        @elseif($filterType=='I')
                                            Insumos
                                        @else
                                            Todos
                                        @endif

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Tipo') }}
                                    </div>
                                    <button class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="filterType('')">
                                        Todos
                                    </button>
                                    <button class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="filterType('C')">
                                        Compras
                                    </button>
                                    <button class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="filterType('I')">
                                        Insumos
                                    </button>
                                </x-slot>
                            </x-jet-dropdown>

                            <x-jet-dropdown align="left" width="48">
                                <x-slot name="trigger">
                        <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-800 hover:bg-red-700 focus:bg-red-900 focus:outline-none transition shadow-[0px_8px_10px_0px_rgba(0,0,0,0.3)]">
                                        Elementos: {{ $paginate }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Elementos por página') }}
                                    </div>
                                    <button class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="changePaginate(5)">
                                        5
                                    </button>
                                    <button class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="changePaginate(10)">
                                        10
                                    </button>
                                    <button class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="changePaginate(15)">
                                        15
                                    </button>
                                    <button class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="changePaginate('')">
                                        Todos
                                    </button>
                                </x-slot>
                            </x-jet-dropdown>


                            <x-jet-dropdown align="left" closeClick="open" width="48">
                                <x-slot name="trigger">
                        <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-800 hover:bg-red-700 focus:bg-red-900 focus:outline-none transition shadow-[0px_8px_10px_0px_rgba(0,0,0,0.3)]">
                                        Columnas

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        Columnas
                                    </div>
                                    <button class="grid grid-cols-2 w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="changeField('fieldId')">
                                        <p class="">Id</p>
                                        <input type="checkbox" class="checked:bg-red-800 focus:ring-red-800 text-red-800 justify-self-center" @if($fieldId) checked @endif>
                                    </button>
                                    <button class="grid grid-cols-2 w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="changeField('fieldProviders_id')">
                                        <p class="">Proveedor</p>
                                        <input type="checkbox" class="checked:bg-red-800 focus:ring-red-800 text-red-800 justify-self-center" @if($fieldProviders_id) checked @endif>
                                    </button>
                                    <button class="grid grid-cols-2 w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="changeField('fieldBills_id')">
                                        <p class="">Numero de factura</p>
                                        <input type="checkbox" class="checked:bg-red-800 focus:ring-red-800 text-red-800 justify-self-center" @if($fieldBills_id) checked @endif>
                                    </button>
                                    <button class="grid grid-cols-2 w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="changeField('fieldName')">
                                        <p class="">Nombre</p>
                                        <input type="checkbox" class="checked:bg-red-800 focus:ring-red-800 text-red-800 justify-self-center" @if($fieldName) checked @endif>
                                    </button>
                                    <button class="grid grid-cols-2 w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="changeField('fieldAmmount')">
                                        <p class="">Cantidad</p>
                                        <input type="checkbox" class="checked:bg-red-800 focus:ring-red-800 text-red-800 justify-self-center" @if($fieldAmmount) checked @endif>
                                    </button>
                                    <button class="grid grid-cols-2 w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="changeField('fieldPrice')">
                                        <p class="">Precio</p>
                                        <input type="checkbox" class="checked:bg-red-800 focus:ring-red-800 text-red-800 justify-self-center" @if($fieldPrice) checked @endif>
                                    </button>
                                    <button class="grid grid-cols-2 w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="changeField('fieldDate')">
                                        <p class="">Fecha</p>
                                        <input type="checkbox" class="checked:bg-red-800 focus:ring-red-800 text-red-800 justify-self-center" @if($fieldDate) checked @endif>
                                    </button>
                                    <button class="grid grid-cols-2 w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="changeField('fieldType')">
                                        <p class="">Tipo</p>
                                        <input type="checkbox" class="checked:bg-red-800 focus:ring-red-800 text-red-800 justify-self-center" @if($fieldType) checked @endif>
                                    </button>
                                    <button class="grid grid-cols-2 w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="changeField('fieldStatus')">
                                        <p class="">Estado</p>
                                        <input type="checkbox" class="checked:bg-red-800 focus:ring-red-800 text-red-800 justify-self-center" @if($fieldStatus) checked @endif>
                                </x-slot>
                            </x-jet-dropdown>
                            @if($selecteds)
                                <x-jet-dropdown align="left" width="48">
                                    <x-slot name="trigger">
                        <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-800 hover:bg-red-700 focus:bg-red-900 focus:outline-none transition shadow-[0px_8px_10px_0px_rgba(0,0,0,0.3)]">
                                        Exportar

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                                    </x-slot>
                                    <x-slot name="content">
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Formato') }}
                                        </div>
                                        <button class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="exportExcel()">
                                            Excel
                                        </button>
                                        <button class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition" wire:click="exportCsv()">
                                            CSV
                                        </button>
                                        <a href="/productPdf/{{$this->encryption}}" target="blank">
                                            <button class="w-full text-start block px-4 py-2 text-sm leading-5 text-white hover:bg-zinc-700 focus:outline-none focus:bg-zinc-900 transition">
                                                PDF
                                            </button>
                                        </a>

                                    </x-slot>
                                </x-jet-dropdown>
                            @endif
                        </div>
                    </div>
                    @if(Auth::user()->job!='M')
                        <x-jet-button wire:click="showProductModal"
                                      class="bg-red-800 hover:bg-red-900 active:bg-red-700 max-sm:mt-5 max-sm:w-full flex justify-center imtems-center sm:ml-5">Registrar</x-jet-button>
                    @endif

                </div>
                <div class="-my-2 overflow-x-auto">
                    <div class="py-2 align-middle inline-block min-w-full
          ">
                        <div class="bg-zinc-800 dark:bg-zinc-900 overflow-hidden">

                            <table class="w-full divide-y divide-gray-200 ">
                                <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">

                                <tr>
                                    <th class ="bg-zinc-800 dark:bg-zinc-900">
                                        <div>
                                            <input type="checkbox" value="4" wire:change="selectAll($event.target.value)" class="checked:bg-red-800 focus:ring-red-800 text-red-800"
                                                   @if($this->isSelectedAll==0)
                                                       checked
                                                @endif
                                            >
                                        </div>
                                    </th>
                                    @if($fieldId)
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 dark:bg-zinc-900 cursor-pointer hover:bg-red-800 hover:underline"
                                            wire:click="sortBy('id')">
                                            <div class="flex">Id<svg class="h-4 w-4 @if($sortField!='id')
                        opacity-0
                        @endif
                        @if($sortDirection=='desc')
                        rotate-180
                        @endif
                        " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                          clip-rule="evenodd" />
                                                </svg></div>
                                        </th>
                                    @endif
                                    @if($fieldProviders_id)
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 dark:bg-zinc-900 cursor-pointer hover:bg-red-800 hover:underline"
                                            wire:click="sortBy('providers_id')">
                                            <div class="flex">Proveedor<svg class="h-4 w-4 @if($sortField!='providers_id')
                        opacity-0
                        @endif
                        @if($sortDirection=='desc')
                        rotate-180
                        @endif
                        " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                          clip-rule="evenodd" />
                                                </svg></div>
                                        </th>
                                    @endif
                                    @if($fieldBills_id)
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 dark:bg-zinc-900 cursor-pointer hover:bg-red-800 hover:underline"
                                            wire:click="sortBy('bills_id')">
                                            <div class="flex">Numero de factura<svg class="h-4 w-4 @if($sortField!='bills_id')
                        opacity-0
                        @endif
                        @if($sortDirection=='desc')
                        rotate-180
                        @endif
                        " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                          clip-rule="evenodd" />
                                                </svg></div>
                                        </th>
                                    @endif
                                    @if($fieldName)
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 dark:bg-zinc-900 cursor-pointer hover:bg-red-800 hover:underline"
                                            wire:click="sortBy('name')">
                                            <div class="flex">Nombre<svg class="h-4 w-4 @if($sortField!='name')
                        opacity-0
                        @endif
                        @if($sortDirection=='desc')
                        rotate-180
                        @endif
                        " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                          clip-rule="evenodd" />
                                                </svg></div>
                                        </th>
                                    @endif
                                    @if($fieldAmmount)
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 dark:bg-zinc-900 cursor-pointer hover:bg-red-800 hover:underline"
                                            wire:click="sortBy('ammount')">
                                            <div class="flex">Cantidad<svg class="h-4 w-4 @if($sortField!='ammount')
                        opacity-0
                        @endif
                        @if($sortDirection=='desc')
                        rotate-180
                        @endif
                        " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                          clip-rule="evenodd" />
                                                </svg></div>
                                        </th>
                                    @endif
                                    @if($fieldPrice)
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 dark:bg-zinc-900 cursor-pointer hover:bg-red-800 hover:underline"
                                            wire:click="sortBy('price')">
                                            <div class="flex">Precio<svg class="h-4 w-4 @if($sortField!='price')
                        opacity-0
                        @endif
                        @if($sortDirection=='desc')
                        rotate-180
                        @endif
                        " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                          clip-rule="evenodd" />
                                                </svg></div>
                                        </th>
                                    @endif
                                    @if($fieldDate)
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 dark:bg-zinc-900 cursor-pointer hover:bg-red-800 hover:underline"
                                            wire:click="sortBy('updated_at')">
                                            <div class="flex">Fecha<svg class="h-4 w-4 @if($sortField!='updated_at')
                        opacity-0
                        @endif
                        @if($sortDirection=='desc')
                        rotate-180
                        @endif
                        " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                          clip-rule="evenodd" />
                                                </svg></div>
                                        </th>
                                    @endif
                                    @if($fieldType)
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 dark:bg-zinc-900 cursor-pointer hover:bg-red-800 hover:underline">
                                            <div class="flex">Tipo<svg class="h-4 w-4 @if($sortField!='type')
                        opacity-0
                        @endif
                        @if($sortDirection=='desc')
                        rotate-180
                        @endif
                        " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                          clip-rule="evenodd" />
                                                </svg></div>
                                        </th>
                                    @endif
                                    @if($fieldStatus)
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 dark:bg-zinc-900 cursor-pointer hover:bg-red-800 hover:underline"
                                            wire:click="sortBy('status')">
                                            <div class="flex">Estado<svg class="h-4 w-4 @if($sortField!='status')
                        opacity-0
                        @endif
                        @if($sortDirection=='desc')
                        rotate-180
                        @endif
                        " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                          clip-rule="evenodd" />
                                                </svg></div>
                                        </th>
                                    @endif
                                    @if(Auth::user()->job=='A')
                                        <th scope="col" class="px-6 py-3 text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 dark:bg-zinc-900">Editar</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-neutral-800 dark:text-white">
                                @foreach($products as $product)
                                    <tr class="
                    @if(in_array($product->id, $selecteds))
                        bg-zinc-300 dark:bg-neutral-700
                        @endif">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <input type="checkbox" wire:change="addToSelecteds({{ $product->id }})" class="checked:bg-red-800 focus:ring-red-800 text-red-800"
                                                   @if(in_array($product->id, $selecteds))
                                                       checked
                                            @endif>
                                        </td>
                                        @if($fieldId)
                                            <td class="px-6 py-4 whitespace-nowrap"><div class="max-w-[12rem] overflow-x-auto">{{ $product->id }}</div></td>
                                        @endif
                                        @if($fieldProviders_id)
                                            <td class="px-6 py-4 whitespace-nowrap"><div class="max-w-[12rem] overflow-x-auto"><?php
                                            echo $this->providerSearch($product->providers_id);
                                            ?></div></td>
                                        @endif
                                        @if($fieldBills_id)
                                            <td class="px-6 py-4 whitespace-nowrap"><div class="max-w-[12rem] overflow-x-auto">{{ $product->bills_id }}</div></td>
                                        @endif
                                        @if($fieldName)
                                            <td class="px-6 py-4 whitespace-nowrap"><div class="max-w-[12rem] overflow-x-auto">{{ $product->name }}</div></td>
                                        @endif
                                        @if($fieldAmmount)
                                            <td class="px-6 py-4 whitespace-nowrap"><div class="max-w-[12rem] overflow-x-auto">{{ $product->ammount }}</div></td>
                                        @endif
                                        @if($fieldPrice)
                                            <td class="px-6 py-4 whitespace-nowrap"><div class="max-w-[12rem] overflow-x-auto">{{ $product->price }}</div></td>
                                        @endif
                                        @if($fieldDate)
                                            <td class="px-6 py-4 whitespace-nowrap"><div class="max-w-[12rem] overflow-x-auto">{{ $product->updated_at }}</div></td>
                                        @endif
                                        @if($fieldType)
                                            <td class="px-6 py-4 whitespace-nowrap"><div class="max-w-[12rem] overflow-x-auto">
                                                    @if($product->type=='C')
                                                        Compra
                                                    @elseif($product->type=='I')
                                                        Insumo
                                                    @endif
                                                </div>
                                            </td>
                                        @endif
                                        @if($fieldStatus)
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                @if($product->status=='1')
                                                    Activo
                                                @else
                                                    Inactivo
                                                @endif
                                            </td>
                                        @endif
                                        @if(Auth::user()->job=='A')
                                            <td class="px-6 py-4 text-right text-sm flex justify-center gap-2">
                                                <x-jet-button wire:click="showEditProductModal({{ $product-> id }})"
                                                              class="bg-zinc-800 dark:bg-zinc-900 hover:bg-zinc-900 active:bg-zinc-700">Editar</x-jet-button>
                                                <x-jet-button wire:click="delete({{ $product-> id }})"
                                                              class="bg-red-800 hover:bg-red-900 active:bg-red-700">
                                                    @if($product->status==0)
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
                  {{ $products->links() }}
                </div>
            </div>
            <div>
                <x-jet-dialog-modal wire:model="showingProductModal">
                    @if($isEditMode)
                        <x-slot name="title">Editar usuario</x-slot>
                    @elseif($isHowToSearchMode)
                        <x-slot name="title">¿Como funciona la busqueda?</x-slot>
                    @else
                        <x-slot name="title">Registrar producto</x-slot>
                    @endif
                    <x-slot name="content">
                        <div class="space-y-8 divide-y divide-gray-200 mt-10">
                            @if($isHowToSearchMode)
                                Puedes buscar:<br>
                                Nombre, <br>
                                Cantidad, <br>
                                Precio, <br>
                                Fecha,<br>
                                Proveedor,<br>
                                o el numero de factura.<br>
                                Ten en cuenta que filtro de estado lo estas utilizando.
                            @else
                                <div class="flex flex-col">
                                    <form enctype="multipart/form-data">
                                        <p>Información</p>
                                        <div class="sm:flex place-content-around m-2">
                                            <div>
                                                <div class="sm:col-span-6">
                                                    <label for="providers_id" class="block text-sm font-medium"> Proveedor </label>
                                                    <div class="mt-1">
                                                        <input type="text" id="providers_id" wire:model.lazy="providerSelected" value="{{$this->providerSelected}}" wire:change="setProvider($event.target.value)" name="providers_id" list="providers" 
                                                               class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5 dark:bg-zinc-800 dark:text-white" />
                                                               <input type="text" id="providers_id" wire:model.lazy="providers_id" name="providers_id"
                                                               class="w-0 h-0 invisible" />
                                                               <datalist id="providers">
                                                                @foreach($providers as $provider)
                                                                @if($provider->status==1)
                                                                <option value="{{$provider->id}}">{{$provider->name}}</option>
                                                                @endif
                                                                @endforeach
                                                                </datalist>
                                                    </div>
                                                    @error('providers_id') <span class="error text-red-500">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="sm:col-span-6">
                                                    <label for="bills_id" class="block text-sm font-medium"> Numero de factura </label>
                                                    <div class="mt-1">
                                                        <input type="number" id="bills_id" wire:model.lazy="bills_id" name="bills_id"
                                                               class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5 dark:bg-zinc-800 dark:text-white" />
                                                    </div>
                                                    @error('bills_id') <span class="error text-red-500">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="sm:col-span-6">
                                                    <label for="name" class="block text-sm font-medium"> Nombre </label>
                                                    <div class="mt-1">
                                                        <input type="text" id="name" wire:model.lazy="name" name="name"
                                                               class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5 dark:bg-zinc-800 dark:text-white" />
                                                    </div>
                                                    @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="sm:col-span-6">
                                                    <label for="ammount" class="block text-sm font-medium"> Cantidad </label>
                                                    <div class="mt-1">
                                                        <input type="number" id="ammount" wire:model.lazy="ammount" name="ammount"
                                                               class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5 dark:bg-zinc-800 dark:text-white" />
                                                    </div>
                                                    @error('ammount') <span class="error text-red-500">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                            <div>
                                                <div class="sm:col-span-6">
                                                    <label for="price" class="block text-sm font-medium"> Precio </label>
                                                    <div class="mt-1">
                                                        <input type="number" id="price" wire:model.lazy="price" name="price"
                                                               class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5 dark:bg-zinc-800 dark:text-white" />
                                                    </div>
                                                    @error('price') <span class="error text-red-500">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="sm:col-span-6">
                                                    <label for="date" class="block text-sm font-medium"> Fecha </label>
                                                    <div class="mt-1">
                                                        <input type="datetime-local" id="date" wire:model.lazy="date" name="date"
                                                               class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5 dark:bg-zinc-800 dark:text-white" />
                                                    </div>
                                                    @error('date') <span class="error text-red-500">{{ $message }}</span> @enderror
                                                </div>
                                                <div class="sm:col-span-6">
                                                    <label for="type" class="block text-sm font-medium"> Tipo </label>
                                                    <div class="mt-1">
                                                        <select id="type" wire:model.lazy="type" name="type"
                                                                class="block w-full bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5 dark:bg-zinc-800 dark:text-white">
                                                            <option value="C">Compra</option>
                                                            <option value="I">Insumo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                @if($idProduct!=1)
                                                    <div class="sm:col-span-6">
                                                        <label for="status" class="block text-sm font-medium"> Estado </label>
                                                        <div class="mt-1">
                                                            <select id="status" wire:model.lazy="status" name="status"
                                                                    class="block w-full bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5 dark:bg-zinc-800 dark:text-white">
                                                                <option value="1">Activo</option>
                                                                <option value="0">Inactivo</option>
                                                            </select>
                                                        </div>
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
                    @if($isEditMode)
                        <x-jet-button wire:click="modalEditFormReset"
                                      class="bg-zinc-800 dark:bg-zinc-900 hover:bg-zinc-900 active:bg-zinc-700">Reset</x-jet-button>
                    @elseif($isHowToSearchMode)
                        <x-jet-button
                            class="invisible">Reset</x-jet-button>
                    @else
                        <x-jet-button wire:click="modalRegFormReset"
                                      class="bg-zinc-800 dark:bg-zinc-900 hover:bg-zinc-900 active:bg-zinc-700">Reset</x-jet-button>
                    @endif
                    <div>
                        @if($isEditMode)
                            <x-jet-button wire:click="updateProduct"
                                          class="bg-red-800 hover:bg-red-900 active:bg-red-700">Actualizar</x-jet-button>
                        @elseif($isHowToSearchMode)
                        @else
                            <x-jet-button wire:click="saveProduct"
                                          class="bg-red-800 hover:bg-red-900 active:bg-red-700">Guardar</x-jet-button>
                        @endif
                        <x-jet-button wire:click="hideModal" type="button"
                                      class="bg-zinc-800 dark:bg-zinc-900 hover:bg-zinc-900 active:bg-zinc-700">Cerrar</x-jet-button>
                    </div>
                </div>
            </x-slot>
            </x-jet-dialog-modal>

        </div>
    </div>
</div>
@if($selecteds)
    <div class="fixed top-32 left-5">
        <x-jet-dropdown align="left" closeClick="open" width="">
            <x-slot name="trigger">
                        <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-800 hover:bg-red-700 focus:bg-red-900 focus:outline-none transition shadow-[0px_8px_10px_0px_rgba(0,0,0,0.3)]">

                            Seleccionados

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
            </x-slot>

            <x-slot name="content">
                <!-- Account Management -->
                <div class="flex gap-5 items-center px-4 py-2 text-xs text-gray-400">
                    Seleccionados
                    <x-jet-button wire:click="deselectAll()"
                                  class="bg-red-800 hover:bg-red-900 active:bg-red-700 max-sm:w-full flex justify-center imtems-center">Deseleccionar</x-jet-button>
                </div>
                <div class="flex flex-wrap gap-2 overflow-y-auto max-h-28 px-2 py-2">
                    @foreach($selecteds as $selected)
                        <button class="selected-container relative bg-red-800 hover:bg-red-900 active:bg-red-700 cursor-pointer w-8 h-8 flex justify-center items-center text-white rounded-md overflow-hidden" wire:click="addToSelecteds({{$selected}})">
                            X
                            <div class="selected-value opacity-100 w-full h-full absolute flex justify-center items-center rounded-md bg-red-800 duration-500">
                                {{$selected}}
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
        window.onload=function()
        {
            PrintElem();
        }
    </script>