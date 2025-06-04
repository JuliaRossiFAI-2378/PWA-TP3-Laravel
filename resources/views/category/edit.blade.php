@extends('layouts/base')

@section('content')
    <div class="mx-16" >
    @if(isset($category))
    <x-edit-form :postImage="$post->imageLink" :post="$post" :user="$user">     
        <x-slot name="postTitle">
            {{{$post->title}}}
        </x-slot>
        <x-slot name="postContent">
            {{{ $post->content }}}
        </x-slot>
        
        <x-slot name="fecha" >
            {{{ $post->created_at }}}
        </x-slot>
    </x-edit-form>
    <div class="mb-6 bg-[#3366CC] rounded-3xl overflow-hidden">
    @else
    <p>algo salio muy mal</p>
    @endif
    </div>
    </div>
@endsection


