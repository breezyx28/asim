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
                <div class="md:p-20 p-12 flex md:flex-row flex-col-reverse justify-between h-full items-center w-full absolute">
                    <div class="hero-text flex flex-col md:gap-y-8 gap-y-4 md:w-1/3 w-full md:h-full h-auto items-center justify-center">
                        <div class="flex flex-col justify-between gap-y-4">
                            <div class="md:text-8xl text-4xl font-bold text-red-600">
                                25% تخفيض
                            </div>

                            <div class="md:text-5xl text-2xl text-black font-bold">
                                هواتف ذكية للبيع
                            </div>
                        </div>

                        <div class="">
                            <div class="md:text-xl text-md font-semibold text-stone-800 uppercase w-full">
                                أقوى و أسرع و أكبر
                            </div>
                        </div>

                        <div class="hero-btn">
                            <a href="/shopping" class="bg-stone-800 text-white px-10 py-2 text-center uppercase">
                                تسوق الأن
                            </a>
                        </div>
                    </div>
                    <div class="splash-phone md:w-1/3 w-full h-full">
                        <img src="{{ asset('assets/products/splash_img.png') }}" class="h-full w-full" alt="">
                    </div>
                </div>
        </section>

        {{-- services --}}
        <section class="services md:px-20 px-4 py-10 w-full overflow-x-hidden">
            <div class="service-wrapper w-full flex flex-col gap-y-10 h-auto">
                <div class="services-ads flex md:flex-row flex-col gap-x-10 justify-between items-center md:h-96">

                    <div class="service-1 relative h-full w-full bg-lime-100 overflow-hidden">
                        <img src="{{ asset('assets/products/service_1.png') }}" alt=""
                            class="overflow-hidden bg-bottom w-full px-10 h-2/3 rotate-180 drop-shadow-xl">
                        <div class="service_1-desc w-full h-full justify-center md:pb-0 pb-4 flex w-full">
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
                                    <div class="md:px-6 px-1 py-2 bg-white md:text-xl text-lg font-bold uppercase">
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

                <div class="flex md:flex-row flex-col justify-between md:gap-x-10 gap-x-2 w-full">

                    <div class="md:h-36 h-auto md:py-0 py-4 w-full bg-purple-200">
                        <div class="flex h-full w-full flex-col justify-center px-4 items-center">
                            <div class="flex md:flex-row flex-col gap-x-4 justify-between items-center">
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
                    <div class="md:h-36 h-auto md:py-0 py-4 w-full bg-blue-100">
                        <div class="flex h-full w-full flex-col justify-center px-4 items-center">
                            <div class="flex md:flex-row flex-col gap-x-4 justify-between items-center">
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
                    <div class="md:h-36 h-auto md:py-0 py-4 w-full bg-red-100">
                        <div class="flex h-full w-full flex-col justify-center px-4 items-center">
                            <div class="flex md:flex-row flex-col gap-x-4 justify-between items-center">
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
                </div>
            </div>
        </section>

        {{-- random product --}}
        <section class="products md:px-20 px-4 py-10 w-full">
            <div class="products-wrapper flex flex-col gap-y-8">
                <div class="products-header">
                    <h1 class="font-bold text-2xl uppercase">
                        هواتق بواسطة الشركة
                    </h1>
                </div>
                <div class="flex flex-col gap-y-6 h-full w-full">
                    <div class="products-items h-full w-full">
                        <div class="items-wrapper h-full grid md:grid-rows-2 grid-row-4 md:grid-cols-4 grid-cols-1 gap-4 w-full">
                            @foreach ($products as $item)
                                <livewire:products.product-card :items="$item" />
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
