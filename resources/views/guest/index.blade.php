@extends('layouts.default')

@section('content')
    <section class="w-full py-20 pb-6">
        <div class=" my-0 mx-auto container">
            <div class="grid grid-cols-2 md:grid-cols-4 xl:grid-cols-6 gap-x-10 gap-y-8 mb-12">
                @foreach ($comics as $comic)
                    <a class="flex text-white hover:scale-95 transition-all duration-200 text-base flex-col gap-4"
                        href="{{ route('comic', $comic) }}">
                        <img class="h-[80%] drop-shadow bg-cover rounded" draggable="false" src={{ $comic['thumb'] }}>
                        <h3 class="uppercase text-xs text-[0.85rem]">{{ $comic['title'] }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="flex justify-center">
            <a href="{{ route('create') }}"
                class="uppercase text-xs bg-blue-500 py-3 hover:bg-blue-600 transition-colors duration-300 px-14 rounded font-bold text-white">Create
                New</a>
        </div>
    </section>
@endsection
