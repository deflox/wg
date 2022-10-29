@extends('layout')

@section('content')
    <div class="bg-gray-800 p-8 max-w-md mx-auto mt-20 rounded-md shadow-md border border-gray-700 text-slate-200">
        <h1 class="text-3xl">Neue WG erstellen</h1>
        <p class="py-3">Bitte gib deiner WG einen Namen und sage uns wie du heisst. Die E-Mail Adresse ist nicht erforderlich aber hilft, wenn du dein WG Access Token vergessen hast.</p>
        <form method="post" action="{{ route('create-group') }}">
            @csrf
            <x-input type="text" name="group-name" label="WG Name:"/>
            <x-input type="text" name="user-name" label="Dein Name:"/>
            <x-input type="email" name="email" label="E-Mail-Adresse:"/>
            <x-submit-button value="Erstellen"/>
        </form>
    </div>
@endsection
