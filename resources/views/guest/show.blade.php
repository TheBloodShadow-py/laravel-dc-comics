@extends('layouts.default')

@php

    if (!function_exists('switchPage')) {
        function switchPage($direction, $comic, $comics_number)
        {
            $link = '';
            if ($direction == 'next') {
                if ($comic->id < $comics_number) {
                    $link = Str::beforeLast(url()->current(), '/') . '/' . Str::afterLast(url()->current(), '/') + 1;
                } else {
                    $link = route('comic', 1);
                }
            } else {
                if ($comic->id > 1) {
                    $link = Str::beforeLast(url()->current(), '/') . '/' . Str::afterLast(url()->current(), '/') - 1;
                } else {
                    $link = route('comic', $comics_number);
                }
            }
            return $link;
        }
    }

@endphp

@section('content')
    <div class="container my-0 mx-auto transition-all duration-300">
        <div class="flex justify-center my-16 flex-col items-center gap-12 text-white px-8">
            <img class="w-[200px] drop-shadow-md rounded-md" draggable="false" src="{{ $comic->thumb }}">
            <ul class="flex flex-col gap-6 text-base">
                <li>
                    <span class="font-bold text-emerald-400">Titolo = </span>
                    {{ $comic->title }}
                </li>
                <li class="max-w-[800px]">
                    <span class="font-bold  text-emerald-400">Descrizione = </span>
                    {{ $comic->description }}
                </li>
                <li>
                    <span class="font-bold  text-emerald-400">Tipo = </span>
                    {{ $comic->type }}
                </li>
                <li>
                    <span class="font-bold  text-emerald-400">Prezzo = </span>
                    {{ $comic->price }}$
                </li>
            </ul>
        </div>
        <div class="flex justify-between items-center px-24 mb-16">
            <a href="{{ switchPage('prev', $comic, $comics_number) }}"
                class="uppercase text-xs cursor-pointer bg-blue-500 py-3 hover:bg-blue-600 transition-colors duration-300 px-14 rounded font-bold text-white">
                Vai indietro
            </a>
            <a href="{{ route('edit', $comic) }}"
                class="uppercase text-xs cursor-pointer bg-blue-500 py-3 hover:bg-blue-600 transition-colors duration-300 px-14 rounded font-bold text-white">
                Modifica
            </a>
            <a href="{{ switchPage('next', $comic, $comics_number) }}"
                class="uppercase text-xs cursor-pointer bg-blue-500 py-3 hover:bg-blue-600 transition-colors duration-300 px-14 rounded font-bold text-white">
                Vai avanti
            </a>
        </div>
    </div>
@endsection
