@extends('layout')

@section('content')
    <div class="bg-gray-800 p-8 max-w-md mx-auto mt-20 rounded-md shadow-md border border-gray-700 text-slate-200">
        <h1 class="text-3xl">Bestehende WG öffnen</h1>
        <x-alerts/>
        <p class="py-3">Bitte gib das Zugriffstoken deiner WG ein, um diese zu öffnen.</p>
        <form method="post" action="{{ route('open.group') }}">
            @csrf
            <x-input type="text" name="token" label="WG Token:"/>
            <x-submit-button value="Weiter"/>
        </form>
    </div>
@endsection
