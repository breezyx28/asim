@extends('layouts.app')

@section('title')
    عرض المنتج
@endsection

@section('main')
    {{-- uppernav --}}
    <x-nav.main-nav />

    <main class="px-20 py-10 w-full">
        <div class="flex w-full gap-x-6 justify-between items-start h-full">
            <div class="w-3/4">
                <div class="wrapper-img w-full h-screen">
                    <img src="{{ asset('assets/products/phones/phone_1.jpg') }}" class="w-full h-3/4 object-contain"
                        alt="">
                </div>
            </div>
            <div class="w-1/4">
                <div class="wrapper-info w-full h-full flex flex-col gap-y-3">
                    <div class="brand uppercase text-lg font-semibold text-stone-400">
                        Samsung
                    </div>
                    <div class="name text-2xl font-semibold text-stone-800">
                        Galaxy S21 Ultra
                    </div>
                    <div class="price text-xl text-amber-400">
                        $124.99
                    </div>
                    <div class="description text-lg text-stone-400 font-normal">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt corrupti ipsa, possimus
                        consequuntur consectetur dolore magni.
                    </div>
                    <div class="cta flex flex-col font-bold gap-y-2 w-full">
                        <button type="button"
                            class="py-4 w-full bg-stone-800 text-white flex gap-x-2 justify-center items-center uppercase font-semibold">
                            <i class="far fa-dollar-sign"></i>
                            <span>
                                شراء
                            </span>
                        </button>
                        <button type="button"
                            class="py-4 w-full bg-stone-800 text-white flex gap-x-2 justify-center items-center uppercase font-semibold">
                            <i class="far fa-shopping-cart"></i><span>إضافة إلى السلة</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="wrapper-info flex flex-col gap-y-4">
                <div class="w-full flex flex-col gap-y-2 pb-4">
                    <div class="w-full head text-2xl font-bold uppercase text-stone-800">معلومات المنتج</div>
                    <div class="w-full text-lg text-stone-600 font-normal">
                        <x-tables.product-info-table :cols="['التقنية', 'الوصف']" :items="[
                                                                    'المعدات' => [
                                                                        'Proccessore' => 'Snapdragon 800',
                                                                        'Bluetooth' => 'v3.0',
                                                                        'External Storage' => '128GB',
                                                                        'Screen' => '6.8 inches Dynamic AMOLED 2X, 120Hz',
                                                                    ],'الهيكل' => [
                                                                        'Dimensions' => '165.1 x 75.6 x 8.9 mm (6.5 x 2.98 x 0.35 in)',
                                                                        'Weight' => '227 g (Sub6), 229 g (mmWave) (8.01 oz)',
                                                                        'Build' => 'Glass front (Gorilla Glass Victus), glass back (Gorilla Glass Victus), aluminum frame',
                                                                        'SIM' => 'Single SIM (Nano-SIM) or Dual SIM (2 Nano-SIMs + eSIM, dual stand-by)
                                                                                    IP68 dust/water resistant (up to 1.5m for 30 mins)
                                                                                    Stylus support'
                                                                    ]
                                                                        ]" />
                    </div>
                </div>
                <div class="">
                    <div class=""></div>
                </div>
                <div class="">
                    <div class=""></div>
                </div>
            </div>
        </div>
    </main>
@endsection
