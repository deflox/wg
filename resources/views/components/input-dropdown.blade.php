<div class="my-3">
    <label for="{{ $name }}" class="block mb-1">{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $name }}" class="
                block
                p-2.5
                border
                w-full
                text-sm
                rounded-lg
                text-white
                bg-gray-700
                border-gray-600
                placeholder-gray-400
                focus:border-blue-500 focus:outline-none">
        @foreach($elements as $key => $value)
            @if($key === $inputValue)
                <option value="{{ $key }}" selected>{{ $value }}</option>
            @else
                <option value="{{ $key }}">{{ $value }}</option>
            @endif
        @endforeach
    </select>
    @error($name)
    <div class="text-xs text-red-500 mt-2">{{ $message }}</div>
    @enderror
</div>
