<div class="my-3">
    <label for="{{ $name }}" class="block mb-1">{{ $label }}</label>
    <input type="{{ $type }}"
           name="{{ $name }}"
           id="{{ $name }}"
           value="{{ $inputValue }}"
           @if($attributes->has('placeholder'))placeholder="{{ $attributes->get('placeholder') }}" @endif class="
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
    @error($name)
    <div class="text-xs text-red-500 mt-2">{{ $message }}</div>
    @enderror
</div>
