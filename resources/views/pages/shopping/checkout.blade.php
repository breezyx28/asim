@extends('layouts.app')

@section('title')
    الدفع
@endsection

@section('main')
    <x-nav.main-nav />
    <main class="px-20 py-10 min-h-screen w-full">
        <div class="text-3xl font-semibold text-stone-800">إجراء الدفع</div>
        @if (Session::has('success'))
            <div class="bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full mt-4"
                role="alert">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle"
                    class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor"
                        d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                    </path>
                </svg>
                تم بنجاح
            </div>
        @endif
        <div class="wrapper flex flex justify-center w-full pt-2">
            <form method="POST" action="{{ route('submitPayment') }}"
                class="w-full border border-stone-300 flex flex-col gap-y-4 rounded p-4">
                @method('POST')
                @csrf
                <div class="w-full grid md:grid-cols-2 grid-cols-1 gap-3">
                    <div class="w-full flex flex-col gap-3">
                        <label for="" class="font-semibold text-lg">Label</label>
                        <input type="text" class="w-full p-2 border border-stone-300 rounded-lg"
                            placeholder="input text here ...">
                    </div>
                    <div class="w-full flex flex-col gap-3">
                        <label for="" class="font-semibold text-lg">Label</label>
                        <input type="text" class="w-full p-2 border border-stone-300 rounded-lg"
                            placeholder="input text here ...">
                    </div>
                </div>
                <div class="w-full">
                    <div class="w-full flex flex-col gap-3">
                        <label for="" class="font-semibold text-lg">Label</label>
                        <select name="" class="w-full p-2 border border-stone-300 rounded-lg">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="w-full bg-stone-800 py-6 text-white rounded">
                    إجراء
                </button>
            </form>
        </div>
    </main>
@endsection
