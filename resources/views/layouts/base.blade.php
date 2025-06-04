<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Titulardium</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body style="background-image: url('{{ asset('images/fondo.jpg') }}');" class="bg-cover bg-center text-[#1b1b18] flex  items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full text-sm mb-6 not-has-[nav]:hidden bg-cyan-500 relative ">
          <a href="{{route('home')}}" class="">
            <img src="{{ asset('images/logo.png') }}" class="absolute left-8  w-96 h-24 overflow-hidden object-cover" />
          </a>
                <nav class="flex items-center justify-end gap-4 h-24">
                        @guest
                          <x-boton href="{{ route('login') }}" class="text-black font-bold h-12 bg-[#FFBBCC] hover:bg-[#DE4444] transition ease-in-out transform hover:translate-y-1 duration-200" >
                            {{__('Login')}}
                          </x-boton>
                          <x-boton href="{{ route('register') }}" class="text-black font-bold h-12 bg-[#FFEE11] hover:bg-[#FFCC11] transition transform ease-in-out hover:translate-y-1 duration-200 " >
                            {{__('crear cuenta')}}
                          </x-boton>
                        @endguest
                        @auth
                          <x-boton href="{{ route('post') }}" class="text-black font-bold h-12 bg-[#FFBBCC] hover:bg-[#DE4444] transition ease-in-out transform hover:translate-y-1 duration-200"  >
                            {{__('crear post')}}
                          </x-boton>
                            <x-dropdown align="right" width="48" class="mr-10">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 rounded-md text-black font-bold h-12 bg-[#FFEE11] hover:bg-[#FFCC11] transition transform ease-in-out hover:translate-y-1 duration-200">
                                        <div>{{ Auth::user()->name }}</div>
                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>
                                <x-slot name="content">
                                <div class="bg-cyan-500 py-1 rounded-md ring-1 ring-black ring-opacity-5">
                                    <x-dropdown-link :href="route('profile.edit')" class="bg-[#3366CC] hover:bg-cyan-500 font-bold" >
                                        {{ __('Profile') }}
                                    </x-dropdown-link>
                                    <x-logout class="bg-[#DE4444] hover:bg-cyan-500 font-bold" />
                                    </div>
                                </x-slot>
                            </x-dropdown>
                        @endauth
                        @php
                            $colores = [ //Vsingers,leoneed,mmj,badsquad,wonderland,niigo
                                'bg-[#00CCBB]',
                                'bg-[#4455DD]',
                                'bg-[#88DD44]',
                                'bg-[#EE1166]',
                                'bg-[#FF9900]',
                                'bg-[#884499]',
                            ];
                        @endphp
                        <x-dropdown class="mr-12">
                            <x-slot name="trigger">
                                <button class="text-white bg-[#3366CC] hover:bg-[#33CCBB] h-12 inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md focus:outline-none ease-in-out transition transform hover:translate-y-1 duration-200">
                                    <div class="font-bold">{{ __('Grupos') }}</div>
                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <div class="bg-cyan-500 py-1 rounded-md ring-1 ring-black ring-opacity-5">
                                    @foreach($categorias as $index => $categoria)
                                      <x-dropdown-link
                                          href="{{ route('index', ['category' => str_replace(' ', '', $categoria->name)]) }}"
                                          class="{{ $colores[$index % count($colores)] }} hover:bg-cyan-500 font-bold"
                                      >
                                          {{ $categoria->name }}
                                      </x-dropdown-link>
                                    @endforeach
                                </div>
                            </x-slot>
                        </x-dropdown>
                </nav>
        </header>
        <div class="flex items-center justify-center w-full lg:grow">
            <main class="flex max-w-[335px] w-full flex-col lg:max-w-none lg:px-20 ">
                <div >
                  @yield('mensaje')
                </div>
                @hasSection('subtitle')
                  <h1 class="font-bold text-4xl mb-6 bg-cyan-500 rounded-xl p-4 text-center text-[#FFBBCC]">
                      @yield('subtitle')
                  </h1>
                @endif <!-- si, se cierra con un endif <|:-) -->
                  @yield('content')
                </div>
            </main>

        <div class="h-14.5 hidden lg:block"></div>
     <footer class="bg-[#DE4444] text-white py-3 w-full mx-auto px-4">
      <div class="px-4">
        <div class="flex flex-col md:flex-row lg:flex-row justify-between gap-2">
          <div>
            <h3 class="text-lg font-semibold mb-2">Sociales</h3>
            <div class="flex space-x-4 mt-2">
              <a href="https://pedco.uncoma.edu.ar">
                <img src="{{ asset('images/PEDCO_Blanco.png') }}" class="w-26 h-8" />
              </a>
            </div>
            <div >
            <a href="https://github.com/JuliaRossiFAI-2378/PWA-TP3-Laravel/">
                <img src="{{ asset('images/github-50.png') }}" class="w-8 h-8" />
              </a>
            </div>
          </div>
          <div>
            <h5 class="text-lg font-semibold mb-2">Recursos</h5>
            <ul class="space-y-1 text-sm">
              <li><a href="https://laravel.com" class="hover:text-yellow-400">Laravel</a></li>
              <li><a href="https://laravel.com/docs/12.x" class="hover:text-yellow-400">Documentacion</a></li>
            </ul>
          </div>
          <div>
            <h5 class="text-lg font-semibold mb-2">Contactanos</h5>
            <ul class="space-y-1 text-sm">
              <li><span>Calle Siempreviva 123, Neuquén Capital, Q8300, Argentina</span></li>
              <li><span>+54 299 123-4567</span></li>
              <li><span>correo@superlegit.gov</span></li>
            </ul>
          </div>
        </div>
        <div class="border-t border-blue-300 mt-6 pt-4 text-xs text-center">
          Trabajo Práctico 3 - Programacion Web Avanzada {{ date('Y') }}
        </div>
      </div>
    </footer>

    </body>
</html>
