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
        </ul>
    </div>
    <div class="max-w-3xl bg-gray-800 mx-auto text-slate-200 px-5 py-10 bg-gray-800 border-l border-r border-b border-gray-700">
        <div class="text-right">
            <a href="">
                <x-button value="Neuer Einkauf erfassen"/>
            </a>
        </div>
        <a href="">
            <div class="bg-gray-600 hover:bg-gray-500 transition duration-150 mt-5 p-3">
                <div>
                    <span class="block">Einkauf Migros (27.10.2022)</span>
                    <span class="block">Dein Guthaben: <span class="text-green-500 font-bold">CHF 53.24</span></span>
                </div>
            </div>
        </a>
    </div>
@endsection
