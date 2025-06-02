@extends('layouts.header')
@yield('header')
<body>
    <div class="container flex justify-center m-16">
        <form action='{{route("createPost")}}' method="POST">
            @csrf
            <input type="hidden" name="user" id="user" value="2">
            <div class="mt-3">
                <label for='title' class=" text-sm font-medium text-gray-700 dark:text-gray-300">T&iacute;tulo:</label>
                <input type='text' id='title' name='title' placeholder="Ingrese el t&iacute;tulo" class="ml-1 p-1 border-1 border-grey-300 rounded-sm"/>
            </div>
            <div class="mt-3">
                <label for='category' class=" text-sm font-medium text-gray-700 dark:text-gray-300">Categoria:</label>
                @if($category['name'] == 'LeoNeed')
                    <input id="category" name="category" hidden value="{{$category['id']}}">
                    <input disabled value="Leo/need">
                @else
                    <input id="category" name="category" hidden value="{{$category['id']}}">
                    <input disabled value="{{$category['name']}}">
                @endif
            </div>
            <div class="mt-3">
                <label for='content' class='block text-sm font-medium text-gray-700 dark:text-gray-300 '>Contenido:</label>
                <textarea id='content' name='content' class='border-1 border-grey-300 rounded-sm p-1'></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>