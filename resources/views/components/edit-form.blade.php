@props(['postImage' => null, 'link' => '#', 'user', "post"])

<div class="flex items-center justify-center w-full lg:grow">
    <form action='{{route("editPost")}}' method="POST" >
        @csrf
        @method("PATCH")
        <div 
        class="flex flex-col p-6 rounded-3xl bg-[#3366CC] w-[20rem] lg:w-[30rem] min-h-96 max-h-96 mb-6 overflow-y-auto custom-scroll shadow-md shadow-gray-600"
        >   

            <x-text-input id="id" name="id" type="hidden" value="{{ $post->id }}" /> 
            <x-text-input id="category" name="category" type="hidden" value="{{ $post->category }}" /> 
            
            <div class="m-1">
                <x-input-label for="imageLink">Link de la imagen: 
                    <x-text-input id="imageLink" name="imageLink" type="text" value="{{ $postImage }}" /> 
                </x-input-label>
            </div>

            <div class="m-1">
                <x-input-label for="title">Titulo del post: 
                    <x-text-input required id="title" name="title" type="text" value="{{ $postTitle }}" />
                </x-input-label>
            </div>

            <x-input-label for="content">Contenido del post: </x-input-label>
            <textarea required id='content' name='content' class='h-[15rem]'>{{ $postContent }}</textarea>
            <div class="flex justify-end bottom-0 right-0 m-2">
                <x-primary-button class="w-24 bg-[#FFBBCC] hover:bg-[#DE4444]">
                    {{ __('enviar') }}
                </x-primary-button>
            </div>
            <h3 class="text-xl text-right text-gray-400 px-4">
                creado por: <span class="font-bold text-xl text-black" >{{$user->name}}</span>
            </h3>
            <p class="text-right px-4 pb-4 text-gray-400" >{{$fecha}}</p>
        </div>
    </form>
</div>