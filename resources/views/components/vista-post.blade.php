@props(['postImage' => null, 'link' => '#', 'post'])

<div 
    class="flex flex-col rounded-3xl bg-[#3366CC] mb-6 overflow-y-auto custom-scroll shadow-md shadow-gray-600"
>
    @if($postImage)
        <img src="{{ $postImage }}" class="rounded-t-lg max-h-[50rem]">
    @endif

    <h2 class="font-bold text-4xl text-center px-4 pt-4 text-[#FFCC11]">
        {{ $postTitle }}
    </h2>

    <div class="text-center p-4 text-white">
        <p>
            {{ $postContent }}
        </p>
    </div>
    @can('delete', $post)
        <div class="flex justify-end gap-4 bottom-0 right-0 m-6">
        <x-boton href="" class="w-24 bg-[#FFBBCC] hover:bg-[#DE4444] ">
                {{ __('editar') }}
            </x-boton>
            <x-boton href="" class="w-24 bg-[#FFBBCC] hover:bg-[#DE4444] ">
                {{ __('borrar') }}
            </x-boton>
        </div>
    @endcan
    <h3 class="text-xl text-right text-gray-400 px-4">
       creado por: <span class="font-bold text-xl text-black" >{{$user}}</span>
    </h3>
    <p class="text-right px-4 pb-4 text-gray-400" >{{$fecha}}</p>

</div>