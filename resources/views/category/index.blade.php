@extends('layouts.header')
@yield('header')
<div class="container">
    @foreach($posts as $post)
        <p>title: {{$post['title']}}</p>
    @endforeach
</div>