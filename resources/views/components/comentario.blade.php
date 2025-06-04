@props(['comentario', 'imagen'])

<div class="bg-[#3366CC] p-4 overflow-y-auto custom-scroll">
    <div class="flex flex-row">
        <img class="rounded-full h-16 w-16 mr-6" src="{{ $imagen }}" />
        <div class="flex flex-col">
            <h3 class="font-bold text-xl text-[#FFCC11]">
                {{ $user }} dijo:
            </h3>
            <p class="text-gray-400">
                {{ $fecha }}
            </p>
        </div>
    </div>
    <div class="p-4 text-white border-b-2 flex items-center justify-between">
        <p class="mb-0">
            {{ $comentarioContent }}
        </p>

        @can('delete', $comentario)
            <form action="{{ route('deleteComentario', $comentario->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <x-primary-button class="bg-[#FFBBCC] hover:bg-[#DE4444]">
                    {{__('Borrar')}}
                </x-primary-button>
            </form>
        @endcan
    </div>
</div>