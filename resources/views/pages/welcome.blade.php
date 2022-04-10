@extends('layouts.app')

@section('title')
    عاصم و عاصم
@endsection

@section('main')
    <x-nav.main-nav />
    <div class="main overflow-x-hidden">
        {{-- hero --}}
        <section id="hero" class="w-screen h-screen relative overflow-x-hidden">
            <img src="{{ asset('assets/img/splash_scr.jpg') }}" alt="" class="w-full h-full overflow-x-hidden absolute">
            <div class="p-20 flex justify-between h-full items-center w-full absolute">
                <div class="hero-text flex flex-col gap-y-8 w-1/3 h-full justify-center">
                    <div class="flex flex-col justify-between">
                        <div class="text-8xl font-bold text-red-600">
                            25% تخفيض
                        </div>

                        <div class="text-5xl text-black font-bold">
                            هواتف ذكية للبيع
                        </div>
                    </div>

                    <div class="">
                        <div class="text-xl font-semibold text-stone-800 uppercase w-full">
                            أقوى و أسرع و أكبر
                        </div>
                    </div>

                    <div class="hero-btn">
                        <a href="/shopping" class="bg-stone-800 text-white px-10 py-2 text-center uppercase">
                            تسوق الأن
                        </a>
                    </div>
                </div>
                <div class="splash-phone w-1/3 h-full">
                    <img src="{{ asset('assets/products/splash_img.png') }}" class="h-full w-full" alt="">
                </div>
            </div>
        </section>

        {{-- services --}}
        <section class="services px-20 py-10 w-screen overflow-x-hidden">
            <div class="service-wrapper w-full flex flex-col gap-y-10">
                <div class="services-ads flex gap-x-10 justify-between items-center h-96">

                    <div class="service-1 relative h-full w-full bg-lime-100 overflow-hidden">
                        <img src="{{ asset('assets/products/service_1.png') }}" alt=""
                            class="overflow-hidden bg-bottom w-full px-10 h-2/3 rotate-180 drop-shadow-xl">
                        <div class="service_1-desc w-full h-full justify-center flex w-full">
                            <div class="flex flex-col h-full items-center">
                                <div class="text-lg uppercase font-semibold">
                                    توصيل مجان
                                </div>
                                <div class="text-2xl uppercase font-semibold">
                                    لكل المنتجات فوق سعر ال $450
                                </div>
                                <div class="text-sm font-semibold w-full text-center mt-1">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, inventore.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="service-2 flex flex-col justify-between h-full w-full bg-orange-100">
                        <div class="service_2-desc">
                            <div class="py-6 flex flex-col justify-center items-center">
                                <div class="text-2xl font-extrabold uppercase mt-3">iphone 6 plus</div>
                                <div class="flex justify-center items-center">
                                    <div class="px-6 py-2 bg-white text-xl font-bold uppercase">
                                        إحصل على تخفيض 25%
                                    </div>
                                    <div class="px-6 py-2 bg-red-600 text-white font-bold uppercase">
                                        off&plus
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('assets/products/service_2.png') }}" alt=""
                            class="overflow-hidden bg-bottom w-full">
                    </div>

                </div>

                <div class="flex justify-between gap-x-10 w-full">
                    <div class="h-36 w-full bg-purple-200">
                        <div class="flex h-full w-full flex-col justify-center px-4 items-center">
                            <div class="flex gap-x-4 justify-between items-center">
                                <div class="service-icon h-full">
                                    <i class="fal fa-user fa-2x h-full"></i>
                                </div>
                                <div class="service-item-content flex flex-col gap-y-1">
                                    <div class="text-md font-bold uppercase">
                                        Lorem ipsum dolor sit amet.
                                    </div>
                                    <div class="text-xs font-semibold">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, excepturi.
                                    </div>
                                    <div class="h-1 rounded-full w-5 bg-red-500"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-36 w-full bg-blue-100">
                        <div class="flex h-full w-full flex-col justify-center px-4 items-center">
                            <div class="flex gap-x-4 justify-between items-center">
                                <div class="service-icon h-full">
                                    <i class="fal fa-user fa-2x h-full"></i>
                                </div>
                                <div class="service-item-content flex flex-col gap-y-1">
                                    <div class="text-md font-bold uppercase">
                                        Lorem ipsum dolor sit amet.
                                    </div>
                                    <div class="text-xs font-bold">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, excepturi.
                                    </div>
                                    <div class="h-1 rounded-full w-5 bg-red-500"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-36 w-full bg-red-100">
                        <div class="flex h-full w-full flex-col justify-center px-4 items-center">
                            <div class="flex gap-x-4 justify-between items-center">
                                <div class="service-icon h-full">
                                    <i class="fal fa-user fa-2x h-full"></i>
                                </div>
                                <div class="service-item-content flex flex-col gap-y-1">
                                    <div class="text-md font-bold uppercase">
                                        Lorem ipsum dolor sit amet.
                                    </div>
                                    <div class="text-xs font-bold">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias, excepturi.
                                    </div>
                                    <div class="h-1 rounded-full w-5 bg-red-500"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- random product --}}
        <section class="products px-20 py-10 w-screen ">
            <div class="products-wrapper flex flex-col gap-y-8">
                <div class="products-header">
                    <h1 class="font-bold text-2xl uppercase">
                        هواتق بواسطة الشركة
                    </h1>
                </div>
                <div class="flex flex-col gap-y-6 h-full w-full">
                    <div class="products-items h-full w-full">
                        <div class="items-wrapper h-full grid grid-rows-2 grid-cols-4 gap-4 w-full">
                            <livewire:products.product-card />
                            <livewire:products.product-card />
                            <livewire:products.product-card />
                            <livewire:products.product-card />
                            <livewire:products.product-card />
                            <livewire:products.product-card />
                            <livewire:products.product-card />
                            <livewire:products.product-card />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
