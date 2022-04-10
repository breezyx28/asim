@extends('layouts.app')

@section('title')
    الدفع
@endsection

@section('main')
    <x-nav.main-nav />

    <main class="px-20 py-10">
        <div class="flex gap-x-20 pt-5">

            <div class="holder w-3/4">
                <div class="wrapper flex justify-between border-b-2 border-stone-200 items-center pb-4 uppercase">
                    <span class="text-2xl font-semibold">سلة المشتريات</span>
                    <span class="text-2xl font-semibold">3 عناصر</span>
                </div>

                <div class="wrapper mt-4">
                    <x-tables.cart-items-table />
                </div>
            </div>

            <div class="wrapper w-1/4 flex items-start pb-4">
                <div class="w-full flex flex-col">
                    <span class="text-2xl font-semibold pb-4 border-b-2 border-stone-200 uppercase">
                        ملخص الطلب
                    </span>

                    <livewire:cart.order-list />

                </div>
            </div>
        </div>

    </main>
@endsection
