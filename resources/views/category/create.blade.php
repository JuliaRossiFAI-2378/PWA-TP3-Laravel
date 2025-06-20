@extends('layouts/base')
@section('content')
    <div class="flex justify-center bg-[#3366CC] rounded-xl m-6 shadow-md shadow-gray-600">
        <form action='{{route("createPost")}}' method="POST" class="w-full mx-6" >
            @csrf
            <input type="hidden" name="user" id="user" value="{{$user}}">
            <div class="mt-3">
                <x-input-label for="title" :value="__('Titulo:')" />
                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" placeholder="Ingrese el t&iacute;tulo"  required autofocus />
            </div>
            <div class="mt-3">
                <x-input-label for="category" :value="__('Categoria:')" />
                <select name="category" id="category" class="rounded-md" @if(isset($category)) disabled @endif>
                    @if($categories != null)
                        @foreach ($categories as $item)
                            @if(!isset($category) || $category == $item['id'])
                                <option value="{{ $item['id'] }}" selected>
                                    {{ $item['name'] == 'LeoNeed' ? 'Leo/need' : $item['name'] }}
                                </option>
                            @endif
                        @endforeach
                    @endif
                </select>
                @if(isset($category))
                    <input type="hidden" name="category" value="{{ $category }}">
                @endif
            </div>
            <div class="mt-3">
                <x-input-label for="imageLink" :value="__('Imagen (URL)')" />
                <x-text-input id="imageLink" name="imageLink" class="block mt-1 w-full" type="text" :value="old('image')" placeholder="https://..." />
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>
            <div class="mt-3">
                <x-input-label for="content" :value="__('Contenido:')" />
                <textarea id='content' name='content' class="border-2 rounded-md p-4 h-96 w-full" ></textarea>
            </div>  
            <div class="flex items-center justify-end my-4">
                <x-primary-button class="ms-3 bg-[#33CCBB] hover:bg-cyan-500">
                    {{ __('Enviar') }}
                </x-primary-button>
            </div>
        </form>
    </div>
@endsection