@extends('layouts.header')

@yield('header')
<div class="container">
    <p>user: {{$user['name']}}</p>
</div>
<p>title: {{$post['title']}}</p>
<p>content: {{$post['content']}}</p>