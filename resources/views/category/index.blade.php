@extends('layouts/base')

@section('subtitle')
@if($subCategory == "LeoNeed")
        Leo/need
@else
        {{{$subCategory}}}
@endif
@endsection

@section('content')
<div class="flex flex-wrap justify-center gap-6">
@if(isset($category))
<div class="flex flex-col bg-[#3366CC] rounded-xl m-6 p-6 min-w-full">
    <p class="text-center font-bold text-2xl mb-6 text-white"> {{$descripcion}} </p>
    <div class="self-end">
        <x-boton href="{{ route('create', ['category' => $category]) }}" class="bg-[#33CCBB] hover:bg-cyan-500">
            Crear post
        </x-boton>
    </div>
</div>

@if(count($posts)>0)
    @foreach($posts as $post)
        <x-contenido-post :postImage="$post->imageLink" :link="url($category.'/'.$post->id)" >
                <x-slot name="postTitle">
                        {{{ $post->title }}}
                </x-slot>
                <x-slot name="postContent">
                        {{{ $post->content }}}
                </x-slot>
        </x-contenido-post>
    @endforeach
@else
        <div class="flex items-center justify-center min-h-96 w-full  text-center font-bold text-2xl">
                <p class="bg-[#3366CC] rounded-xl p-6" >no hay posts :(</p>
        </div>
@endif
@else
        <div class="flex items-center justify-center min-h-96 w-full  text-center font-bold text-2xl" >
                <h1 class="bg-[#3366CC] rounded-xl p-6" >algo salio muy mal</h1>
        </div>
@endif
</div>
@endsection
