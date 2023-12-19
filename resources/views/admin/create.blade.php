@extends('layouts.default')

@section('content')
    <div class="container my-0 mx-auto transition-all duration-300">
        <div class="flex justify-center my-32 flex-col items-center gap-20 text-white px-8 text-base">
            <h1 class="text-xl font-bold text-emerald-400 uppercase">Crea un nuovo comic</h1>
            <form method="POST" action="{{ route('store') }}">
                @csrf
                <div class="flex flex-col gap-6">
                    <div class="flex items-center gap-4">
                        <input placeholder="Titolo" name="title"
                            class="rounded w-[300px] focus-within:outline-none focus-visible:outline-none py-3 px-4 text-xs text-emerald-400"
                            type="text">
                    </div>
                    <div class="flex items-center gap-4">
                        <input placeholder="Descrizione" name="description"
                            class="rounded w-[300px] focus-within:outline-none focus-visible:outline-none py-3 px-4 text-xs text-emerald-400"
                            type="text">
                    </div>
                    <div class="flex items-center gap-4">
                        <input placeholder="Link immagine" name="thumb"
                            class="rounded w-[300px] focus-within:outline-none focus-visible:outline-none py-3 px-4 text-xs text-emerald-400"
                            type="text">
                    </div>
                    <div class="flex items-center gap-4">
                        <input placeholder="Prezzo" name="price"
                            class="rounded w-[300px] focus-within:outline-none focus-visible:outline-none py-3 px-4 text-xs text-emerald-400"
                            type="number" step="0.01">
                    </div>
                    <div class="flex items-center gap-4">
                        <input placeholder="Serie" name="series"
                            class="rounded w-[300px] focus-within:outline-none focus-visible:outline-none py-3 px-4 text-xs text-emerald-400"
                            type="text">
                    </div>
                    <button
                        class="uppercase text-xs cursor-pointer bg-blue-500 py-3 hover:bg-blue-600
                        transition-colors duration-300 px-14 rounded font-bold text-white"
                        type="submit">Invia</button>
                </div>
            </form>
        </div>
    </div>
@endsection
