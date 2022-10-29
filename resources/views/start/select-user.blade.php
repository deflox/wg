@extends('layout')

@section('content')
    <div class="bg-gray-800 p-8 max-w-md mx-auto mt-20 rounded-md shadow-md border border-gray-700 text-slate-200">
        <h1 class="text-3xl">Nutzerauswahl</h1>
        <p class="py-3">Welcher WG Mitbewohner bist du?</p>
        <form method="post" action="{{ route('choose-user', ['token' => $token]) }}">
            @csrf
            <x-input-dropdown name="user" label="Auswahl:" :elements="$users"/>
            <x-submit-button value="Auswählen"/>
        </form>
    </div>
@endsection
