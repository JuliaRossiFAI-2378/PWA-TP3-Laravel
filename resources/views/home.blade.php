@extends('layouts/base')

@section('mensaje')
@if((session('error')))
<div class="bg-blue-900 p-6 text-white" >
<p>{{{session('error')}}}<p>
</div>
@endif
@endsection
@section('subtitle')
Ultimos posts:
@endsection
@section('content')
<div class="flex flex-wrap justify-center gap-6">
    @foreach($posts as $post)
        <x-contenido-post :postImage="$post['post']->imageLink" :link="url($post['categoria'].'/'.$post['post']->id)" >
                <x-slot name="postTitle">
                        {{{ $post['post']->title }}}
                </x-slot>
                <x-slot name="postContent">
                        {{{ $post['post']->content }}}
                </x-slot>
        </x-contenido-post>
    @endforeach
</div>
@endsection

