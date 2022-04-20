@extends('layouts.app')

@section('title')
    الدفع
@endsection

@section('main')
    <x-nav.main-nav />

    <main class="md:px-20 px-4 py-10 min-h-screen w-full">
        <div class="flex md:flex-row flex-col gap-x-20 pt-5 w-full">


            <div class="holder md:w-3/4 w-full">
                <div class="wrapper flex justify-between border-b-2 border-stone-200 items-center pb-4 uppercase">
                    <span class="text-xl md:text-2xl font-semibold">سلة المشتريات</span>
                    <span class="text-xl md:text-2xl font-semibold">{{ count($cart) ?? '...' }} عناصر</span>
                </div>

                <div class="wrapper mt-4">
                    <x-tables.cart-items-table />
                </div>
            </div>



            <div class="wrapper md:w-1/4 flex items-start pb-4 w-full">
                <div class="w-full flex flex-col">
                    <span class="text-xl md:text-2xl font-semibold pb-4 border-b-2 border-stone-200 uppercase">
                        ملخص الطلب
                    </span>

                    <livewire:cart.order-list />

                </div>
            </div>
        </div>

    </main>
@endsection
