<div class="mt-5">
    <label for="{{ $id }}"
        class="block mt-2  text-xs font-semibold text-gray-600 uppercase">{{ $label }}</label>
    <input id="{{ $id }}" type="{{ $type }}" name="{{ $name }}"
        placeholder="{{ $placeholder }}"
        class="block w-full py-3 px-1 mt-2 text-gray-800 appearance-none border-0 border-b-2 border-gray-100 focus:outline-none focus:text-gray-500 focus:border-gray-200"
        @if ($value) value="{{ $value }}" @endif
        @if ($required) required @endif>
</div>
