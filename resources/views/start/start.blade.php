@extends('layout')

@section('content')
    <div class="bg-gray-800 px-5 py-20 max-w-md mx-auto mt-20 rounded-md shadow-md border border-gray-700 text-slate-200">
        <h1 class="text-3xl text-center mb-5">WG Finance WebApp</h1>
        <div class="max-w-xs mx-auto">
            <a href="{{ route('create-group') }}">
                <button class="
                bg-blue-600
                w-full
                my-2
                text-slate-200
                font-medium
                py-2.5
                shadow-md
                rounded
                hover:bg-blue-700 hover:shadow-lg
                focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                active:bg-blue-800 active:shadow-lg
                transition
                duration-150
                ease-in-out">Neue WG erstellen</button>
            </a>
            <a href="{{ route('open-group') }}">
                <button class="
                bg-blue-600
                w-full
                my-2
                text-slate-200
                font-medium
                py-2.5
                shadow-md
                rounded
                hover:bg-blue-700 hover:shadow-lg
                focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                active:bg-blue-800 active:shadow-lg
                transition
                duration-150
                ease-in-out">Bestehende WG öffnen</button>
            </a>
        </div>
    </div>
@endsection
