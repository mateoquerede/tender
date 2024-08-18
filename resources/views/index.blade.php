@extends('layouts.app')

@section('title', 'Tender')

@section('contenedor')

    <div class="h-full flex justify-center">
        <div class="w-1/3 mt-3">
            {{-- Navigation --}}

            <div class="flex justify-between items-center mb-3">
                <div class="shrink-0 flex">
                    <a class="font-logo text-sky-100 text-2xl">Tender</a>

                    <img src="{{ asset('sun.png') }}" alt="iso" class="mt-1 ml-1 w-4 h-4">
                </div>

                @if (Auth::check())
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <div id="dropdownMenu" class="relative">
                            <button id="dropdownButton" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md dark:bg-gray-700/60 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 focus:outline-none transition ease-in-out duration-150">
                                <div>{{Auth::user()->name}}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>

                            <!-- Dropdown Menu -->
                            <div id="dropdownContent" class="hidden absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white dark:bg-fake-transparent dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ring-1 ring-black ring-opacity-5">
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200">Configuración</a>
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200">Calibrar</a>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-200">Cerrar sesión</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                <a href="{{ route('login') }}" class="block text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">Iniciar sesión</a>
                @endif
            </div>

            <input type="text" id="localizacion" class="text-center border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700/60 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="¿Que ciudad querés consultar?" required />

            <h3 class="text-slate-50 text-center text-xl mt-10 mb-4">Pergamino, <small class="text-slate-300">Buenos Aires</small></h3>

            {{-- Clima --}}

            <div class="w-full backdrop-blur-md bg-white/20 rounded-3xl pt-8 pb-4 px-5 flex flex-col items-center text-slate-50">


                <img src="{{ asset('/img/dark/lluvia3.svg') }}" alt="clima" class="w-2/5">

                <h3 class="font-bold text-6xl">24° c</h3>

                <p class="mt-3">Nublado con lluvia</p>

                <div class="w-full flex justify-between mt-12">
                    <x-tooltip>
                        <x-slot name="elemento">
                            <span><i class="fa fa-wind"></i> 11km/h</span>
                        </x-slot>

                        <x-slot name="contenido">Viento</x-slot>
                    </x-tooltip>
                    <x-tooltip>
                        <x-slot name="elemento">
                            <span><i class="fa fa-droplet"></i> 46%</span>
                        </x-slot>

                        <x-slot name="contenido">Humedad</x-slot>
                    </x-tooltip>
                    <x-tooltip>
                        <x-slot name="elemento">
                            <span><i class="fa fa-umbrella"></i> 15% 12 mm</span>
                        </x-slot>

                        <x-slot name="contenido">Lluvia</x-slot>
                    </x-tooltip>
                    <x-tooltip>
                        <x-slot name="elemento">
                            <span><i class="fa fa-sun"></i> 40%</span>
                        </x-slot>

                        <x-slot name="contenido">Índice&nbspUV</x-slot>
                    </x-tooltip>
                </div>
            </div>

            {{-- Pronóstico --}}

            <div class="my-3 flex justify-between gap-x-2 text-slate-50">
                <div class="backdrop-blur-md bg-white/20 rounded-2xl py-2 px-3 flex flex-col items-center text-center">
                    Lun

                    <img src="{{ asset('/img/dark/nublado2.svg') }}" alt="clima" class="w-2/3 my-2">

                    <span>18°&nbsp<span class="text-slate-300">12°</span></span>
                </div>

                <div class="backdrop-blur-md bg-white/20 rounded-2xl py-2 px-3 flex flex-col items-center text-center">
                    Mar

                    <img src="{{ asset('/img/dark/nublado3.svg') }}" alt="clima" class="w-2/3 my-auto">

                    <span>14°&nbsp<span class="text-slate-300">7°</span></span>
                </div>

                <div class="backdrop-blur-md bg-white/20 rounded-2xl py-2 px-3 flex flex-col items-center text-center">
                    Mie

                    <img src="{{ asset('/img/dark/lluvia2.svg') }}" alt="clima" class="w-2/3 my-auto">

                    <span>13°&nbsp<span class="text-slate-300">9°</span></span>
                </div>

                <div class="backdrop-blur-md bg-white/20 rounded-2xl py-2 px-3 flex flex-col items-center text-center">
                    Jue

                    <img src="{{ asset('/img/dark/nublado1.svg') }}" alt="clima" class="w-2/3 my-auto">

                    <span>13°&nbsp<span class="text-slate-300">5°</span></span>
                </div>

                <div class="backdrop-blur-md bg-white/20 rounded-2xl py-2 px-3 flex flex-col items-center text-center">
                    Vie

                    <img src="{{ asset('/img/dark/nublado1.svg') }}" alt="clima" class="w-2/3 my-auto">

                    <span>14°&nbsp<span class="text-slate-300">2°</span></span>
                </div>

                <div class="backdrop-blur-md bg-white/20 rounded-2xl py-2 px-3 flex flex-col items-center text-center">
                    Sab

                    <img src="{{ asset('/img/dark/sol1.svg') }}" alt="clima" class="w-2/3 my-auto">

                    <span>17°&nbsp<span class="text-slate-300">2°</span></span>
                </div>

                <div class="backdrop-blur-md bg-white/20 rounded-2xl py-2 px-3 flex flex-col items-center text-center">
                    Dom

                    <img src="{{ asset('/img/dark/sol2.svg') }}" alt="clima" class="w-2/3 my-auto">

                    <span>16°&nbsp<span class="text-slate-300">2°</span></span>
                </div>
            </div>

            {{-- Cálculo de secado --}}

            <div class="w-full backdrop-blur-md bg-white/20 rounded-3xl py-5 px-5 items-center text-slate-50 divide-y divide-slate-400">
                <div class="flex items-center justify-between py-2 first:pt-0">
                    <div class="flex items-center w-9/20 justify-between">
                        <h4>Secado&nbsprápido</h4>

                        <h4 class="text-2xl ml-5">6h30m</h4>
                    </div>

                    <div class="flex items-center">
                        <h4>Listo a las 9:55 AM</h4>

                        <button class="w-8 h-8 shrink-0 grow-0 rounded-full bg-white/20 text-center flex items-center justify-center ml-2 hover:bg-white/30">
                            <i class="fa fa-chart-line"></i>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between py-2">
                    <div class="flex items-center w-9/20 justify-between">
                        <h4>Secado&nbspmoderado</h4>

                        <h4 class="text-2xl ml-5">8h15m</h4>
                    </div>

                    <div class="flex items-center">
                        <h4>Listo a las 11:40 AM</h4>

                        <button class="w-8 h-8 shrink-0 grow-0 rounded-full bg-white/20 text-center flex items-center justify-center ml-2 hover:bg-white/30">
                            <i class="fa fa-chart-line"></i>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between py-2">
                    <div class="flex items-center w-9/20 justify-between">
                        <h4>Secado&nbsplento</h4>

                        <h4 class="text-2xl ml-5">10h40m</h4>
                    </div>

                    <div class="flex items-center">
                        <h4>Listo a las 2:05 PM</h4>

                        <button class="w-8 h-8 shrink-0 grow-0 rounded-full bg-white/20 text-center flex items-center justify-center ml-2 hover:bg-white/30">
                            <i class="fa fa-chart-line"></i>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between py-2 last:pb-0">
                    <div class="flex items-center w-9/20 justify-between">
                        <h4>Secado&nbspmuy&nbsplento</h4>

                        <h4 class="text-2xl ml-5">14h10m</h4>
                    </div>

                    <div class="flex items-center">
                        <h4>Listo a las 5:35 PM</h4>

                        <button class="w-8 h-8 shrink-0 grow-0 rounded-full bg-white/20 text-center flex items-center justify-center ml-2 hover:bg-white/30">
                            <i class="fa fa-chart-line"></i>
                        </button>
                    </div>
                </div>

            </div>

            {{-- Botones --}}

            <div class="w-full flex justify-between mt-5">
                <div class="w-5/12 backdrop-blur-md bg-white/25 rounded-2xl py-2 p-5 items-center text-slate-50 text-center">
                    <a href=""><i class="fa fa-calculator"></i> Calcular tiempo de secado</a>
                </div>
                <div class="w-5/12 backdrop-blur-md bg-white/25 rounded-2xl py-2 p-5 items-center text-slate-50 text-center">
                    <a href=""><i class="fa fa-stopwatch"></i> Iniciar temporizador</a>
                </div>
            </div>
        </div>
    </div>
@endsection
