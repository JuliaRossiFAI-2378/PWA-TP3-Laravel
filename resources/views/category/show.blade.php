@extends('layouts/base')

@section('content')
    <div class="mx-16" >
    @if(isset($category))
    <x-vista-post :postImage="$post->imageLink" :post="$post" >     
        <x-slot name="postTitle">
            {{{$post->title}}}
        </x-slot>
        <x-slot name="postContent">
            {{{ $post->content }}}
        </x-slot>
        <x-slot name="user">
            {{{$user}}}
        </x-slot>
        <x-slot name="fecha" >
            {{{ $post->created_at }}}
        </x-slot>
    </x-vista-post>
    <div class="mb-6 bg-[#3366CC] rounded-3xl overflow-hidden">
    <p class="pl-4 py-4 font-bold text-2xl text-[#FFBBCC]" >Comentarios</p>
    @auth
    <form action="{{ route('home', $post->id) }}" method="POST" class="m-6">
        @csrf
        <textarea name="content" rows="4" class="w-full p-2 rounded-md" placeholder="Deja un comentario..."></textarea>
        <x-primary-button class="bg-cyan-400">
            Enviar comentario
        </x-primary-button>
    </form>
    @endauth
    @foreach($coments as $coment)
        <x-comentario :comentario="$coment['comentario']" :imagen="$coment['imagen']"  >
            <x-slot name="user">
                {{{$coment['usuario']}}}
            </x-slot>
            <x-slot name="fecha">
                {{{$coment['comentario']->created_at}}}
            </x-slot>
            <x-slot name="comentarioContent">
                {{{$coment['comentario']->content}}}
            </x-slot>
        </x-comentario>
    @endforeach
    </div>
    @else
    <p>algo salio muy mal</p>
    @endif
    </div>
@endsection


