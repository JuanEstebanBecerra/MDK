<?php
$filters = explode(",", $selecteds);
?>
<table style="width:100%;">
  <thead style="height:152px;background:rgb(201, 201, 201);border-radius:10px;">
    <tr>
      <th style="width:152px;background:rgb(23, 23, 23);">
        <img src="assets/textures/logo.png" style="height:128px;"></img>
      </th>
      <th style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        Mega-Chevrolet
      </th>
      <th style="width:256px;">
      asdasddsad<br>
      asdasdad
      </th>
    </tr>
  </thead>
  <tbody>
    <td>
      adfdf
    </td>
  </tbody>
</table>
<table class="w-full divide-y divide-gray-200 ">
                  <thead class="" style="background:rgb(39, 39, 42);color:white;border-radius: 5px;padding-bottom:20px;">

                    <tr>
                    @if(in_array('fieldId', $filters))
                      <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 cursor-pointer hover:bg-red-800 hover:underline"
                        wire:click="sortBy('id')">
                        <div class="flex">Id</div>
                      </th>
                      @endif
                      @if(in_array('fieldType', $filters))
                      <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 cursor-pointer hover:bg-red-800 hover:underline"
                        wire:click="sortBy('type')">
                        <div class="flex">Tipo de documento</div>
                      </th>
                      @endif
                      @if(in_array('fieldCc', $filters))
                      <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 cursor-pointer hover:bg-red-800 hover:underline"
                        wire:click="sortBy('cc')">
                        <div class="flex">Numero de documento</div>
                      </th>
                      @endif
                      @if(in_array('fieldName', $filters))
                      <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 cursor-pointer hover:bg-red-800 hover:underline"
                        wire:click="sortBy('name')">
                        <div class="flex">Nombre</div>
                      </th>
                      @endif
                      @if(in_array('fieldJob', $filters))
                      <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 cursor-pointer hover:bg-red-800 hover:underline"
                        wire:click="sortBy('job')">
                        <div class="flex">Cargo</div>
                      </th>
                      @endif
                      @if(in_array('fieldEmail', $filters))
                      <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 cursor-pointer hover:bg-red-800 hover:underline"
                        wire:click="sortBy('email')">
                        <div class="flex">Correo</div>
                      </th>
                      @endif
                      @if(in_array('fieldPhone', $filters))
                      <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 cursor-pointer hover:bg-red-800 hover:underline"
                        wire:click="sortBy('phone')">
                        <div class="flex">Telefono</div>
                      </th>
                      @endif
                      @if(in_array('fieldQuestion', $filters))
                      <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800">
                        <div class="flex">Pregunta clave</div>
                      </th>
                      @endif
                      @if(in_array('fieldAnswer', $filters))
                      <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800">
                        <div class="flex">Respuesta</div>
                      </th>
                      @endif
                      @if(in_array('fieldStatus', $filters))
                      <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider bg-zinc-800 cursor-pointer hover:bg-red-800 hover:underline"
                        wire:click="sortBy('status')">
                        <div class="flex">Estado</div>
                      </th>
                      @endif
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($users as $user)
                    @if(in_array($user->id, $filters))
                    <tr class="">
                    @if(in_array('fieldId', $filters))
                      <td class="px-6 py-4 whitespace-nowrap"><div class="max-w-[12rem] overflow-x-auto">{{ $user->id }}</div></td>
                      @endif
                      @if(in_array('fieldType', $filters))
                      <td class="px-6 py-4 whitespace-nowrap"><div class="max-w-[12rem] overflow-x-auto">{{ $user->type }}</div></td>
                      @endif
                      @if(in_array('fieldCc', $filters))
                      <td class="px-6 py-4 whitespace-nowrap"><div class="max-w-[12rem] overflow-x-auto">{{ $user->cc }}</div></td>
                      @endif
                      @if(in_array('fieldName', $filters))
                      <td class="px-6 py-4 whitespace-nowrap"><div class="max-w-[12rem] overflow-x-auto">{{ $user->name }}</div></td>
                      @endif
                      @if(in_array('fieldJob', $filters))
                      <td class="px-6 py-4 whitespace-nowrap"><div class="max-w-[12rem] overflow-x-auto">
                      @if($user->job=='A')
                        Administrador
                        @elseif($user->job=='T')
                        Trabajador
                        @elseif($user->job=='M')
                        Mecanico
                        @endif
                      </div>
                      </td>
                      @endif
                      @if(in_array('fieldEmail', $filters))
                      <td class="px-6 py-4 whitespace-nowrap"><div class="max-w-[12rem] overflow-x-auto">{{ $user->email }}</div></td>
                      @endif
                      @if(in_array('fieldPhone', $filters))
                      <td class="px-6 py-4 whitespace-nowrap"><div class="max-w-[12rem] overflow-x-auto">{{ $user->phone }}</div></td>
                      @endif
                      @if(in_array('fieldQuestion', $filters))
                      <td class="px-6 py-4 whitespace-nowrap"><div class="max-w-[12rem] overflow-x-auto">{{ $user->question }}</div></td>
                      @endif
                      @if(in_array('fieldAnswer', $filters))
                      <td class="px-6 py-4 whitespace-nowrap"><div class="max-w-[12rem] overflow-x-auto">{{ $user->answer }}</div></td>
                      @endif
                      @if(in_array('fieldStatus', $filters))
                      <td class="px-6 py-4 whitespace-nowrap">
                        @if($user->status=='1')
                        Activo
                        @else
                        Inactivo
                        @endif
                      </td>
                      @endif
                      
                    </tr>
                    @endif
                    @endforeach
                    <!-- More items... -->
                  </tbody>
                </table>
                