@extends('layouts.app')

@section('title', 'Tender')

@section('contenedor')

    <div class="h-full flex justify-center items-center">
        <div class="w-1/3 mt-32">
            <input type="text" id="localizacion" class="bg-gray-50 text-center border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="¿Que ciudad querés consultar?" required />

            <h3 class="text-center text-2xl mt-20 mb-10">Pergamino</h3>

            <div class="w-full backdrop-blur-md bg-white/20 rounded-3xl p-5">

                24 grados

            </div>
        </div>
    </div>
@endsection
