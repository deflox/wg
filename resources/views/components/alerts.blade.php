@if(session()->has('error'))
    <div class="text-red-700 bg-red-200 rounded my-5 p-3">
        {{ session()->get('error') }}
    </div>
@endif
