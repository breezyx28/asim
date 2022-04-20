@extends('layouts.app')

@section('title')
    صفحة المنتجات
@endsection

@section('main')
    <x-nav.main-nav />

    <div class="main">
        <div class="px-4 md:px-20 py-10 w-full">

            {{-- search, filter and sort buttons --}}
            {{-- <div class="products-controll flex items-center w-full gap-x-4 mb-4">
                <div class="w-1/4">
                    <x-buttons.dropdown-btn />
                </div>
                <div class="w-3/4">
                    <x-buttons.search-btn />
                </div>
            </div> --}}

            <div class="products-wrapper flex md:flex-row flex-col justify-between gap-x-6 w-full">
                <div class="flex flex-col md:h-screen h-auto gap-y-4 w-full md:w-1/4">
                    <div class="flex flex-col py-4 gap-y-2 border-b border-stone-800">
                        <div class="head text-2xl font-bold text-stone-800 uppercase">
                            brand
                        </div>
                        <div class="flex gap-2 w-full flex-wrap">
                            <x-buttons.checkbox-btn label="Smasung" />
                            <x-buttons.checkbox-btn label="Iphone" />
                            <x-buttons.checkbox-btn label="Huwaui" />
                            <x-buttons.checkbox-btn label="Nokia" />
                        </div>
                    </div>
                    <div class="flex flex-col py-4 gap-y-2 border-b border-stone-800">
                        <div class="head text-2xl font-bold text-stone-800 uppercase">
                            color
                        </div>
                        <div class="flex gap-2 w-full flex-wrap">
                            <x-buttons.checkbox-btn label="black" />
                            <x-buttons.checkbox-btn label="blue" />
                            <x-buttons.checkbox-btn label="white" />
                            <x-buttons.checkbox-btn label="silver" />
                        </div>
                    </div>
                    <div class="flex flex-col py-4 gap-y-2 border-b border-stone-800">
                        <div class="head text-2xl font-bold text-stone-800 uppercase">
                            storage
                        </div>
                        <div class="flex gap-2 w-full flex-wrap">
                            <x-buttons.checkbox-btn label="16GB" />
                            <x-buttons.checkbox-btn label="32GB" />
                            <x-buttons.checkbox-btn label="64GB" />
                            <x-buttons.checkbox-btn label="128GB" />
                            <x-buttons.checkbox-btn label="256GB" />
                            <x-buttons.checkbox-btn label="512GB" />
                        </div>
                    </div>
                </div>
                <div class="w-full h-auto">
                    <div
                        class="h-min-screen h-auto grid grid-cols-1 lg:grid-cols-4 sm:grid-cols-2 md:grid-cols-3 gap-4 w-full">
                        @foreach ($products as $item)
                            <livewire:products.product-card :items="$item" />
                        @endforeach

                    </div>

                    <div dir="ltr" class="p-4">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
