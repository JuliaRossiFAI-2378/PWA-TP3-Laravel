@extends('layouts/base')

@section('subtitle')
{{{$category}}}:
@endsection
@section('content')
<div class="flex flex-wrap justify-center gap-6">
@if(isset($category))
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
        <p>no hay posts :(</p>
@endif
@else
        <h1>algo salio muy mal</h1>
@endif
</div>
@endsection
