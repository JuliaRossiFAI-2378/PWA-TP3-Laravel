@props(['postImage' => null, 'link' => '#', 'user', "post"])

<div class="flex justify-center bg-[#3366CC] rounded-xl m-6 shadow-md shadow-gray-600">
    <form action='{{route("editPost")}}' method="POST" class="w-full mx-6" >
        @csrf
        @method("PATCH")
            <x-text-input id="user" name="user" type="hidden" value="{{ $user }}" />
            <x-text-input id="id" name="id" type="hidden" value="{{ $post->id }}" /> 
            <x-text-input id="category" name="category" type="hidden" value="{{ $post->category }}" /> 
            
            <div class="mt-3">
                <x-input-label for="title">Titulo del post: 
                    <x-text-input required id="title" name="title" type="text" value="{{ $postTitle }}" class="block mt-1 w-full" />
                </x-input-label>
            </div>

            <div class="mt-3">
                <x-input-label for="imageLink">Link de la imagen: 
                    <x-text-input id="imageLink" name="imageLink" type="text" value="{{ $postImage }}" class="block mt-1 w-full" /> 
                </x-input-label>
            </div>
            <div class="mt-3" >
            <x-input-label for="content">Contenido del post: </x-input-label>
            <textarea required id='content' name='content' class="border-2 rounded-md p-4 h-96 w-full" >{{ $postContent }}</textarea>
            </div>
            <div class="flex items-center justify-end my-4">
                <x-primary-button class="ms-3 bg-[#FFBBCC] hover:bg-[#DE4444]">
                    {{ __('enviar') }}
                </x-primary-button>
            </div>
    </form>
</div>