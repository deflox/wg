@extends('layout')

@section('content')
    <div class="max-w-3xl mx-auto border-l border-r border-b border-gray-700 text-slate-200 px-5 py-3 bg-gray-800 flex justify-between">
        <h1 class="text-3xl flex items-center">WG Name</h1>
        <button class="p-2 text-slate-200 inline-flex items-center text-gray-500 rounded-lg hover:bg-gray-700 focus:ring-gray-600">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
    <div class="max-w-3xl mx-auto border-l border-r border-b border-gray-700 px-5 py-5 bg-gray-800 text-slate-200">
        <ul>
            <li><a href="" class="font-bold hover:text-white">Zahlungen</a></li>
            <li><a href="" class="font-bold hover:text-white">Zahlungsperioden</a></li>
            <li><a href="" class="font-bold hover:text-white">Einstellungen</a></li>
            <li><a href="" class="font-bold hover:text-white">Logout</a></li>
        </ul>
    </div>
    <div class="max-w-3xl bg-gray-800 mx-auto text-slate-200 px-5 py-10 bg-gray-800 border-l border-r border-b border-gray-700">
        <form method="post" action="{{ route('payments.new') }}">
            <x-input type="text" name="title" label="Titel dieses Einkaufs:"/>
            <x-input type="text" name="date" label="Datum des Einkaufs:" placeholder="DD.MM.YYYY"/>
            <h2 class="text-2xl">Einträge:</h2>
            <div class="bg-gray-500 p-4 flex flex-row mt-4">
                <div class="basis-1/2 mr-2">
                    <input type="text" id="transaction-description" placeholder="Beschreibung" class="block p-2.5 border w-full text-sm rounded-lg text-white bg-gray-700 border-gray-600 placeholder-gray-400 focus:border-blue-500 focus:outline-none">
                </div>
                <div class="basis-3/8">
                    <input type="text" id="transaction-amount" placeholder="Betrag" class="block p-2.5 border w-full text-sm rounded-lg text-white bg-gray-700 border-gray-600 placeholder-gray-400 focus:border-blue-500 focus:outline-none">
                </div>
                <div class="basis-1/8 text-right">
                    <button type="submit" class="
                    bg-blue-600
                    text-slate-200
                    font-medium
                    py-2
                    px-3
                    shadow-md
                    rounded
                    hover:bg-blue-700 hover:shadow-lg
                    focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                    active:bg-blue-800 active:shadow-lg
                    transition
                    duration-150
                    ease-in-out">
                        Hinzufügen
                    </button>
                </div>
            </div>
            <x-submit-button value="Speichern"/>
        </form>
    </div>
@endsection
