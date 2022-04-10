<div class="mt-5">
    <label for="{{ $id }}"
        class="block mt-2  text-xs font-semibold text-gray-600 uppercase">{{ $label }}</label>
    <select dir="ltr" id="{{ $id }}" name="{{ $name }}"
        class="block w-full py-3 px-1 mt-2 text-gray-800 appearance-none mr-auto border-0 border-b-2 border-gray-100 focus:outline-none focus:text-gray-500 focus:border-gray-200"
        @if ($required) required @endif>
        <option readonly>إختر</option>
        @foreach ($items as $item)
            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
        @endforeach
    </select>
</div>
