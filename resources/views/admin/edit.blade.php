@extends('layouts.default')

@section('content')
    <div class="container my-0 mx-auto transition-all duration-300">
        <div class="flex justify-center my-32 flex-col items-center gap-20 text-white px-8 text-base">
            <h1 class="text-xl font-bold text-emerald-400 uppercase">Modifica un comic</h1>
            <form method="POST" action="{{ route('update', $comic) }}">
                @method('PUT')
                @csrf
                <div class="flex flex-col gap-6">
                    <div class="flex items-center gap-4">
                        <input placeholder="Titolo" name="title" value="{{ $comic->title }}"
                            class="rounded w-[300px] focus-within:outline-none focus-visible:outline-none py-3 px-4 text-xs text-emerald-400"
                            type="text">
                    </div>
                    <div class="flex items-center gap-4">
                        <input placeholder="Descrizione" name="description" value="{{ $comic->description }}"
                            class="rounded w-[300px] focus-within:outline-none focus-visible:outline-none py-3 px-4 text-xs text-emerald-400"
                            type="text">
                    </div>
                    <div class="flex items-center gap-4">
                        <input placeholder="Link immagine" name="thumb" value="{{ $comic->thumb }}"
                            class="rounded w-[300px] focus-within:outline-none focus-visible:outline-none py-3 px-4 text-xs text-emerald-400"
                            type="text">
                    </div>
                    <div class="flex items-center gap-4">
                        <input placeholder="Prezzo" name="price" value="{{ $comic->price }}"
                            class="rounded w-[300px] focus-within:outline-none focus-visible:outline-none py-3 px-4 text-xs text-emerald-400"
                            type="text">
                    </div>
                    <div class="flex items-center gap-4">
                        <input placeholder="Serie" name="series" value="{{ $comic->series }}"
                            class="rounded w-[300px] focus-within:outline-none focus-visible:outline-none py-3 px-4 text-xs text-emerald-400"
                            type="text">
                    </div>
                    <button
                        class="uppercase text-xs cursor-pointer bg-blue-500 py-3 hover:bg-blue-600
                    transition-colors duration-300 px-14 rounded font-bold text-white"
                        type="submit">Invia</button>
                </div>
            </form>

            <form method="POST" action="{{ route('destroy', $comic) }}">
                @method('DELETE')
                @csrf
                <div class="flex items-center justify-center]">
                    <button
                        class="uppercase text-xs w-[300px] cursor-pointer bg-red-500 py-3 hover:bg-red-600
            transition-colors duration-300 px-14 rounded font-bold text-white"
                        id="openModalButton">Elimina</button>
                </div>

                <div id="modal"
                    class="absolute top-0 left-0 w-full h-full p-10 bg-[#626b6db0] hidden items-center justify-center">
                    <div class="bg-white p-6 rounded drop-shadow-lg flex flex-col gap-1 items-center justify-center">
                        <span class="text-black">Sei sicuro di voler cancellare questo item? </span>
                        <span class="text-black mb-5">{{ $comic->title }}</span>
                        <div class="flex items-center gap-2">
                            <button
                                class="uppercase text-xs w-[170px] cursor-pointer opacity-100 bg-green-500 py-3 hover:bg-green-600
    transition-colors duration-300 px-6 rounded font-bold text-white"
                                type="" id="goBackButton">Torna indietro</button>
                            <button
                                class="uppercase text-xs w-[170px] cursor-pointer opacity-100 bg-red-500 py-3 hover:bg-red-600
        transition-colors duration-300 px-6 rounded font-bold text-white"
                                type="submit">Elimina</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script async>
        const openModalButton = document.getElementById("openModalButton");
        const goBackButton = document.getElementById("goBackButton");
        const modal = document.getElementById("modal");


        openModalButton.addEventListener("click", function(event) {
            event.preventDefault();
            modal.style = "display: flex;";
        });

        goBackButton.addEventListener("click", function(event) {
            event.preventDefault();
            modal.style = "";
        })
    </script>
@endsection
