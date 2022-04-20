<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    {{-- font-awesome --}}
    <link rel="stylesheet" href="{{ asset('assets/FA/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/FA/font-awesome.min.css.css') }}">

    @yield('head')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- livewire style --}}
    @livewireStyles
</head>



<style>
    /* This example part of kwd-dashboard see https://kamona-wd.github.io/kwd-dashboard/ */
    /* So here we will write some classes to simulate dark mode and some of tailwind css config in our project */
    :root {
        --light: #edf2f9;
        --dark: #152e4d;
        --darker: #12263f;

        --color-red: #dc2626;
        --color-green: #16a34a;
        --color-blue: #2563eb;
        --color-cyan: #0891b2;
        --color-teal: #0d9488;
        --color-fuchsia: #c026d3;
        --color-orange: #ea580c;
        --color-yellow: #ca8a04;
        --color-violet: #7c3aed;
    }

    [x-cloak] {
        display: none;
    }

    .dark .dark\:text-light {
        color: var(--light);
    }

    .dark .dark\:bg-dark {
        background-color: var(--dark);
    }

    .dark .dark\:bg-darker {
        background-color: var(--darker);
    }

    .dark .dark\:text-gray-300 {
        color: #D1D5DB;
    }

    .dark .dark\:text-blue-500 {
        color: #3B82F6;
    }

    .dark .dark\:text-blue-100 {
        color: #DBEAFE;
    }

    .dark .dark\:hover\:text-light:hover {
        color: var(--light);
    }

    .dark .dark\:border-blue-800 {
        border-color: #1e40af;
    }

    .dark .dark\:border-blue-700 {
        border-color: #1D4ED8;
    }

    .dark .dark\:bg-blue-600 {
        background-color: #2563eb;
    }

    .dark .dark\:hover\:bg-blue-600:hover {
        background-color: #2563eb;
    }

    .hover\:overflow-y-auto:hover {
        overflow-y: auto;
    }

</style>

<body dir="rtl">

    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" :class="{ 'dark': isDark}">
        <!--  -->
        <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
            <!-- Loading screen -->
            <div x-ref="loading"
                class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-opacity-90 bg-blue-800">
                تحميل.....
            </div>

            <!-- Sidebar -->
            <aside class="flex-shrink-0 hidden w-64 bg-white border-r dark:border-blue-800 dark:bg-darker md:block">
                <div class="flex flex-col h-full">
                    <!-- Sidebar links -->
                    <nav aria-label="Main" class="flex-1 px-2 py-4 space-y-2 overflow-y-hidden hover:overflow-y-auto">
                        <!-- Dashboards links -->
                        <div x-data="{ isActive: false, open: false }">
                            <!-- active & hover classes 'bg-blue-100 dark:bg-blue-600' -->
                            <a href="#" @click="$event.preventDefault(); open = !open"
                                class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-blue-100 dark:hover:bg-blue-600"
                                :class="{'bg-blue-100 dark:bg-blue-600': isActive || open}" role="button"
                                aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                <span aria-hidden="true">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                </span>
                                <span class="mr-2 text-sm"> لوحة التحكم </span>
                                <span class="mr-auto" aria-hidden="true">
                                    <!-- active class 'rotate-180' -->
                                    <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </a>
                            <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                                <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                <a href="#" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                    Default
                                </a>
                                <a href="#" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                    Project Mangement
                                </a>
                                <a href="#" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                    E-Commerce
                                </a>
                            </div>
                        </div>

                        <!-- Users links -->
                        <div x-data="{ isActive: false, open: false }">
                            <!-- active classes 'bg-blue-100 dark:bg-blue-600' -->
                            <a href="#" @click="$event.preventDefault(); open = !open"
                                class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-blue-100 dark:hover:bg-blue-600"
                                :class="{ 'bg-blue-100 dark:bg-blue-600': isActive || open }" role="button"
                                aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                <span aria-hidden="true">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                    </svg>
                                </span>
                                <span class="mr-2 text-sm"> المستخدمين </span>
                                <span aria-hidden="true" class="mr-auto">
                                    <!-- active class 'rotate-180' -->
                                    <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </a>
                            <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Users">
                                <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                <a href="{{ route('users.create') }}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                    إنشاء
                                </a>
                                <a href="{{ route('users.index') }}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                    تقرير
                                </a>
                            </div>
                        </div>

                        <!-- Orders links -->
                        <div x-data="{ isActive: false, open: false }">
                            <!-- active classes 'bg-blue-100 dark:bg-blue-600' -->
                            <a href="#" @click="$event.preventDefault(); open = !open"
                                class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-blue-100 dark:hover:bg-blue-600"
                                :class="{ 'bg-blue-100 dark:bg-blue-600': isActive || open }" role="button"
                                aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                <span aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 transition-transform transform" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </span>
                                <span class="mr-2 text-sm"> الطلبات </span>
                                <span aria-hidden="true" class="mr-auto">
                                    <!-- active class 'rotate-180' -->
                                    <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </a>
                            <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Orders">
                                <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                <a href="{{ route('orders.index') }}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                    تقرير
                                </a>
                            </div>
                        </div>

                        <!-- Categories links -->
                        <div x-data="{ isActive: false, open: false }">
                            <!-- active classes 'bg-blue-100 dark:bg-blue-600' -->
                            <a href="#" @click="$event.preventDefault(); open = !open"
                                class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-blue-100 dark:hover:bg-blue-600"
                                :class="{ 'bg-blue-100 dark:bg-blue-600': isActive || open }" role="button"
                                aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                <span aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                </span>
                                <span class="mr-2 text-sm"> الأصناف </span>
                                <span aria-hidden="true" class="mr-auto">
                                    <!-- active class 'rotate-180' -->
                                    <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </a>
                            <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Categories">
                                <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                <a href="{{ route('categories.create') }}" role="menuitem"
                                    class="block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:text-light dark:hover:text-light hover:text-gray-700">
                                    إنشاء
                                </a>
                                <a href="{{ route('categories.index') }}" role="menuitem"
                                    class="block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:text-light dark:hover:text-light hover:text-gray-700">
                                    تقارير
                                </a>
                            </div>
                        </div>

                        <!-- products links -->
                        <div x-data="{ isActive: false, open: false }">
                            <!-- active & hover classes 'bg-blue-100 dark:bg-blue-600' -->
                            <a href="#" @click="$event.preventDefault(); open = !open"
                                class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-blue-100 dark:hover:bg-blue-600"
                                :class="{'bg-blue-100 dark:bg-blue-600': isActive || open}" role="button"
                                aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                <span aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                    </svg>
                                </span>
                                <span class="mr-2 text-sm"> منتجات </span>
                                <span aria-hidden="true" class="mr-auto">
                                    <!-- active class 'rotate-180' -->
                                    <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </a>
                            <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Products">
                                <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                <a href="{{ route('products.create') }}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                    إنشاء
                                </a>
                                <a href="{{ route('products.index') }}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                    تقارير
                                </a>
                            </div>
                        </div>

                        <!-- product details links -->
                        <div x-data="{ isActive: false, open: false }">
                            <!-- active & hover classes 'bg-blue-100 dark:bg-blue-600' -->
                            <a href="#" @click="$event.preventDefault(); open = !open"
                                class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-blue-100 dark:hover:bg-blue-600"
                                :class="{'bg-blue-100 dark:bg-blue-600': isActive || open}" role="button"
                                aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                <span aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                                    </svg>
                                </span>
                                <span class="mr-2 text-sm"> مواصفات المنتجات </span>
                                <span aria-hidden="true" class="mr-auto">
                                    <!-- active class 'rotate-180' -->
                                    <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </a>
                            <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="ProductDetails">
                                <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                <a href="{{ route('productDetails.create') }}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                    إنشاء
                                </a>
                                <a href="{{ route('productDetails.index') }}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                    تقارير
                                </a>
                            </div>
                        </div>

                        <!-- checkouts links -->
                        <div x-data="{ isActive: false, open: false }">
                            <!-- active & hover classes 'bg-blue-100 dark:bg-blue-600' -->
                            <a href="#" @click="$event.preventDefault(); open = !open"
                                class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-blue-100 dark:hover:bg-blue-600"
                                :class="{'bg-blue-100 dark:bg-blue-600': isActive || open}" role="button"
                                aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                <span aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>
                                </span>
                                <span class="mr-2 text-sm">عمليات الدفع </span>
                                <span aria-hidden="true" class="mr-auto">
                                    <!-- active class 'rotate-180' -->
                                    <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </a>
                            <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Checkouts">
                                <a href="{{ route('checkouts.index') }}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                    تقارير
                                </a>
                            </div>
                        </div>

                        <!-- payment methods links -->
                        <div x-data="{ isActive: false, open: false }">
                            <!-- active & hover classes 'bg-blue-100 dark:bg-blue-600' -->
                            <a href="#" @click="$event.preventDefault(); open = !open"
                                class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-blue-100 dark:hover:bg-blue-600"
                                :class="{'bg-blue-100 dark:bg-blue-600': isActive || open}" role="button"
                                aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                <span aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                    </svg>
                                </span>
                                <span class="mr-2 text-sm"> طرق الدفع </span>
                                <span aria-hidden="true" class="mr-auto">
                                    <!-- active class 'rotate-180' -->
                                    <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </span>
                            </a>
                            <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="payment_methods">
                                <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                <a href="{{ route('paymentMethods.create') }}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                    إنشاء
                                </a>
                                <a href="{{ route('paymentMethods.index') }}" role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                    تقارير
                                </a>
                            </div>
                        </div>
                    </nav>

                </div>
            </aside>

            <div class="flex flex-col flex-1 min-h-screen overflow-x-hidden overflow-y-auto">
                <!-- Navbar -->
                <header class="relative bg-white dark:bg-darker">
                    <div class="flex items-center justify-between p-2 border-b dark:border-blue-800">
                        <!-- Mobile menu button -->
                        <button @click="isMobileMainMenuOpen = !isMobileMainMenuOpen"
                            class="p-1 text-blue-400 transition-colors duration-200 rounded-md bg-blue-50 hover:text-blue-600 hover:bg-blue-100 dark:hover:text-light dark:hover:bg-blue-700 dark:bg-dark md:hidden focus:outline-none focus:ring">
                            <span class="sr-only">إفتح القائمة الرئيسية</span>
                            <span aria-hidden="true">
                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </span>
                        </button>

                        <!-- Brand -->
                        <a href="/"
                            class="inline-block text-2xl font-bold tracking-wider text-stone-800 uppercase dark:text-light">
                            {{ env('APP_NAME') }}
                        </a>

                        <!-- Mobile sub menu button -->
                        <button @click="isMobileSubMenuOpen = !isMobileSubMenuOpen"
                            class="p-1 text-blue-400 transition-colors duration-200 rounded-md bg-blue-50 hover:text-blue-600 hover:bg-blue-100 dark:hover:text-light dark:hover:bg-blue-700 dark:bg-dark md:hidden focus:outline-none focus:ring">
                            <span class="sr-only">إفتح القائمة الفرعية</span>
                            <span aria-hidden="true">
                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                </svg>
                            </span>
                        </button>

                        <!-- Desktop Right buttons -->
                        <nav aria-label="Secondary" class="hidden space-x-2 md:flex md:items-center">

                            <!-- User avatar button -->
                            <div class="relative" x-data="{ open: false }">
                                <button @click="open = !open; $nextTick(() => { if(open){ $refs.userMenu.focus() } })"
                                    type="button" aria-haspopup="true" :aria-expanded="open ? 'true' : 'false'"
                                    class="transition-opacity duration-200 rounded-full dark:opacity-75 dark:hover:opacity-100 focus:outline-none focus:ring dark:focus:opacity-100">
                                    <span class="sr-only">User menu</span>
                                    <img class="w-10 h-10 rounded-full"
                                        src="https://avatars.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4"
                                        alt="Ahmed Kamel" />
                                </button>

                                <!-- User dropdown menu -->
                                <div x-show="open" x-ref="userMenu"
                                    x-transition:enter="transition-all transform ease-out"
                                    x-transition:enter-start="translate-y-1/2 opacity-0"
                                    x-transition:enter-end="translate-y-0 opacity-100"
                                    x-transition:leave="transition-all transform ease-in"
                                    x-transition:leave-start="translate-y-0 opacity-100"
                                    x-transition:leave-end="translate-y-1/2 opacity-0" @click.away="open = false"
                                    @keydown.escape="open = false"
                                    class="absolute left-0 w-48 py-1 bg-white rounded-md shadow-lg top-12 ring-1 ring-black ring-opacity-5 dark:bg-dark focus:outline-none"
                                    tabindex="-1" role="menu" aria-orientation="vertical" aria-label="User menu">
                                    <a href="#" role="menuitem"
                                        class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-blue-600">
                                        الصفة الشخصية
                                    </a>
                                    <a href="{{ route('logout') }}" role="menuitem"
                                        class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-blue-600">
                                        تسجيل خروج
                                    </a>
                                </div>
                            </div>
                        </nav>

                        <!-- Mobile sub menu -->
                        <nav x-transition:enter="transition duration-200 ease-in-out transform sm:duration-500"
                            x-transition:enter-start="-translate-y-full opacity-0"
                            x-transition:enter-end="translate-y-0 opacity-100"
                            x-transition:leave="transition duration-300 ease-in-out transform sm:duration-500"
                            x-transition:leave-start="translate-y-0 opacity-100"
                            x-transition:leave-end="-translate-y-full opacity-0" x-show="isMobileSubMenuOpen"
                            @click.away="isMobileSubMenuOpen = false"
                            class="absolute flex items-center p-4 bg-white rounded-md shadow-lg dark:bg-darker top-16 inset-x-4 md:hidden"
                            aria-label="Secondary">

                            <!-- User avatar button -->
                            <div class="relative mr-auto" x-data="{ open: false }">
                                <button @click="open = !open" type="button" aria-haspopup="true"
                                    :aria-expanded="open ? 'true' : 'false'"
                                    class="block transition-opacity duration-200 rounded-full dark:opacity-75 dark:hover:opacity-100 focus:outline-none focus:ring dark:focus:opacity-100">
                                    <span class="sr-only">قائمة المستخدم</span>
                                    <img class="w-10 h-10 rounded-full"
                                        src="https://avatars.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4"
                                        alt="Ahmed Kamel" />
                                </button>

                                <!-- User dropdown menu -->
                                <div x-show="open" x-transition:enter="transition-all transform ease-out"
                                    x-transition:enter-start="translate-y-1/2 opacity-0"
                                    x-transition:enter-end="translate-y-0 opacity-100"
                                    x-transition:leave="transition-all transform ease-in"
                                    x-transition:leave-start="translate-y-0 opacity-100"
                                    x-transition:leave-end="translate-y-1/2 opacity-0" @click.away="open = false"
                                    class="absolute left-0 w-48 py-1 origin-top-right bg-white rounded-md shadow-lg top-12 ring-1 ring-black ring-opacity-5 dark:bg-dark"
                                    role="menu" aria-orientation="vertical" aria-label="User menu">
                                    <a href="#" role="menuitem"
                                        class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-blue-600">
                                        الصفحة الشخصية
                                    </a>
                                    <a href="{{ route('logout') }}" role="menuitem"
                                        class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-blue-600">
                                        تسجيل الخروج
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!-- Mobile main manu -->
                    <div class="border-b md:hidden dark:border-blue-800" x-show="isMobileMainMenuOpen"
                        @click.away="isMobileMainMenuOpen = false">
                        <nav aria-label="Main" class="px-2 py-4 space-y-2">
                            <!-- Dashboards links -->
                            <div x-data="{ isActive: false, open: false }">
                                <!-- active & hover classes 'bg-blue-100 dark:bg-blue-600' -->
                                <a href="#" @click="$event.preventDefault(); open = !open"
                                    class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-blue-100 dark:hover:bg-blue-600"
                                    :class="{'bg-blue-100 dark:bg-blue-600': isActive || open}" role="button"
                                    aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                    <span aria-hidden="true">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                        </svg>
                                    </span>
                                    <span class="mr-2 text-sm"> لوحة التحكم </span>
                                    <span class="mr-auto" aria-hidden="true">
                                        <!-- active class 'rotate-180' -->
                                        <svg class="w-4 h-4 transition-transform transform"
                                            :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </span>
                                </a>
                                <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                                    <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                    <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                    <a href="#" role="menuitem"
                                        class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                        Default
                                    </a>
                                    <a href="#" role="menuitem"
                                        class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                        Project Mangement
                                    </a>
                                    <a href="#" role="menuitem"
                                        class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                        E-Commerce
                                    </a>
                                </div>
                            </div>

                            <!-- Users links -->
                            <div x-data="{ isActive: false, open: false }">
                                <!-- active classes 'bg-blue-100 dark:bg-blue-600' -->
                                <a href="#" @click="$event.preventDefault(); open = !open"
                                    class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-blue-100 dark:hover:bg-blue-600"
                                    :class="{ 'bg-blue-100 dark:bg-blue-600': isActive || open }" role="button"
                                    aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                    <span aria-hidden="true">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                        </svg>
                                    </span>
                                    <span class="mr-2 text-sm"> المستخدمين </span>
                                    <span aria-hidden="true" class="mr-auto">
                                        <!-- active class 'rotate-180' -->
                                        <svg class="w-4 h-4 transition-transform transform"
                                            :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </span>
                                </a>
                                <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Users">
                                    <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                    <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                    <a href="{{ route('users.create') }}" role="menuitem"
                                        class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                        إنشاء
                                    </a>
                                    <a href="{{ route('users.index') }}" role="menuitem"
                                        class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                        تقارير
                                    </a>
                                </div>
                            </div>

                            <!-- Orders links -->
                            <div x-data="{ isActive: false, open: false }">
                                <!-- active classes 'bg-blue-100 dark:bg-blue-600' -->
                                <a href="#" @click="$event.preventDefault(); open = !open"
                                    class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-blue-100 dark:hover:bg-blue-600"
                                    :class="{ 'bg-blue-100 dark:bg-blue-600': isActive || open }" role="button"
                                    aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                    <span aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-5 h-5 transition-transform transform" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </span>
                                    <span class="mr-2 text-sm"> الطلبات </span>
                                    <span aria-hidden="true" class="mr-auto">
                                        <!-- active class 'rotate-180' -->
                                        <svg class="w-4 h-4 transition-transform transform"
                                            :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </span>
                                </a>
                                <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Orders">
                                    <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                    <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                    <a href="{{ route('orders.index') }}" role="menuitem"
                                        class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700">
                                        التقارير
                                    </a>
                                </div>
                            </div>

                            <!-- Categories links -->
                            <div x-data="{ isActive: false, open: false }">
                                <!-- active classes 'bg-blue-100 dark:bg-blue-600' -->
                                <a href="#" @click="$event.preventDefault(); open = !open"
                                    class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-blue-100 dark:hover:bg-blue-600"
                                    :class="{ 'bg-blue-100 dark:bg-blue-600': isActive || open }" role="button"
                                    aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                    <span aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                        </svg>
                                    </span>
                                    <span class="mr-2 text-sm"> الأصناف </span>
                                    <span aria-hidden="true" class="mr-auto">
                                        <!-- active class 'rotate-180' -->
                                        <svg class="w-4 h-4 transition-transform transform"
                                            :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </span>
                                </a>
                                <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" arial-label="Categories">
                                    <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                    <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                    <a href="{{ route('categories.create') }}" role="menuitem"
                                        class="block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:text-light dark:hover:text-light hover:text-gray-700">
                                        إنشاء
                                    </a>
                                    <a href="{{ route('categories.index') }}" role="menuitem"
                                        class="block p-2 text-sm text-gray-700 transition-colors duration-200 rounded-md dark:text-light dark:hover:text-light hover:text-gray-700">
                                        تقارير
                                    </a>
                                </div>
                            </div>

                            <!-- products links -->
                            <div x-data="{ isActive: false, open: false }">
                                <!-- active & hover classes 'bg-blue-100 dark:bg-blue-600' -->
                                <a href="#" @click="$event.preventDefault(); open = !open"
                                    class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-blue-100 dark:hover:bg-blue-600"
                                    :class="{'bg-blue-100 dark:bg-blue-600': isActive || open}" role="button"
                                    aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                    <span aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                        </svg>
                                    </span>
                                    <span class="mr-2 text-sm"> المنتجات </span>
                                    <span aria-hidden="true" class="mr-auto">
                                        <!-- active class 'rotate-180' -->
                                        <svg class="w-4 h-4 transition-transform transform"
                                            :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </span>
                                </a>
                                <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Products">
                                    <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                    <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                    <a href="{{ route('products.create') }}" role="menuitem"
                                        class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                        إنشاء
                                    </a>
                                    <a href="{{ route('products.index') }}" role="menuitem"
                                        class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                        تقارير
                                    </a>
                                </div>
                            </div>

                            <!-- product details links -->
                            <div x-data="{ isActive: false, open: false }">
                                <!-- active & hover classes 'bg-blue-100 dark:bg-blue-600' -->
                                <a href="#" @click="$event.preventDefault(); open = !open"
                                    class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-blue-100 dark:hover:bg-blue-600"
                                    :class="{'bg-blue-100 dark:bg-blue-600': isActive || open}" role="button"
                                    aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                    <span aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                                        </svg>
                                    </span>
                                    <span class="mr-2 text-sm"> تفاصيل المنتج </span>
                                    <span aria-hidden="true" class="mr-auto">
                                        <!-- active class 'rotate-180' -->
                                        <svg class="w-4 h-4 transition-transform transform"
                                            :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </span>
                                </a>
                                <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="ProductDetails">
                                    <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                    <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                    <a href="{{ route('productDetails.create') }}" role="menuitem"
                                        class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                        إنشاء
                                    </a>
                                    <a href="{{ route('productDetails.index') }}" role="menuitem"
                                        class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                        تقارير
                                    </a>
                                </div>
                            </div>

                            <!-- checkouts links -->
                            <div x-data="{ isActive: false, open: false }">
                                <!-- active & hover classes 'bg-blue-100 dark:bg-blue-600' -->
                                <a href="#" @click="$event.preventDefault(); open = !open"
                                    class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-blue-100 dark:hover:bg-blue-600"
                                    :class="{'bg-blue-100 dark:bg-blue-600': isActive || open}" role="button"
                                    aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                    <span aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                    </span>
                                    <span class="mr-2 text-sm">عمليات الدفع </span>
                                    <span aria-hidden="true" class="mr-auto">
                                        <!-- active class 'rotate-180' -->
                                        <svg class="w-4 h-4 transition-transform transform"
                                            :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </span>
                                </a>
                                <div x-show="open" class="mt-2 space-y-2 px-7" role="menu" aria-label="Checkouts">
                                    <a href="{{ route('checkouts.index') }}" role="menuitem"
                                        class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                        التقارير
                                    </a>
                                </div>
                            </div>

                            <!-- payment methods links -->
                            <div x-data="{ isActive: false, open: false }">
                                <!-- active & hover classes 'bg-blue-100 dark:bg-blue-600' -->
                                <a href="#" @click="$event.preventDefault(); open = !open"
                                    class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-blue-100 dark:hover:bg-blue-600"
                                    :class="{'bg-blue-100 dark:bg-blue-600': isActive || open}" role="button"
                                    aria-haspopup="true" :aria-expanded="(open || isActive) ? 'true' : 'false'">
                                    <span aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                        </svg>
                                    </span>
                                    <span class="mr-2 text-sm"> طرق الدفع </span>
                                    <span aria-hidden="true" class="mr-auto">
                                        <!-- active class 'rotate-180' -->
                                        <svg class="w-4 h-4 transition-transform transform"
                                            :class="{ 'rotate-180': open }" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </span>
                                </a>
                                <div x-show="open" class="mt-2 space-y-2 px-7" role="menu"
                                    aria-label="payment_methods">
                                    <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                    <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                    <a href="{{ route('paymentMethods.create') }}" role="menuitem"
                                        class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                        إنشاء
                                    </a>
                                    <a href="{{ route('paymentMethods.index') }}" role="menuitem"
                                        class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                                        تقارير
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </header>

                <!-- Main content -->
                <div class="flex items-center justify-center flex-1 h-full p-4 w-full">
                    <main class="w-full h-full">
                        @yield('content')
                    </main>
                </div>

            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.6.x/dist/component.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js"></script>

    <script>
        const setup = () => {
            const getTheme = () => {
                if (window.localStorage.getItem('dark')) {
                    return JSON.parse(window.localStorage.getItem('dark'))
                }
                return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
            }

            const setTheme = (value) => {
                window.localStorage.setItem('dark', value)
            }

            return {
                loading: true,
                isDark: getTheme(),
                toggleTheme() {
                    this.isDark = !this.isDark
                    setTheme(this.isDark)
                },
                setLightTheme() {
                    this.isDark = false
                    setTheme(this.isDark)
                },
                setDarkTheme() {
                    this.isDark = true
                    setTheme(this.isDark)
                },
                isSettingsPanelOpen: false,
                openSettingsPanel() {
                    this.isSettingsPanelOpen = true
                    this.$nextTick(() => {
                        this.$refs.settingsPanel.focus()
                    })
                },
                isNotificationsPanelOpen: false,
                openNotificationsPanel() {
                    this.isNotificationsPanelOpen = true
                    this.$nextTick(() => {
                        this.$refs.notificationsPanel.focus()
                    })
                },
                isSearchPanelOpen: false,
                openSearchPanel() {
                    this.isSearchPanelOpen = true
                    this.$nextTick(() => {
                        this.$refs.searchInput.focus()
                    })
                },
                isMobileSubMenuOpen: false,
                openMobileSubMenu() {
                    this.isMobileSubMenuOpen = true
                    this.$nextTick(() => {
                        this.$refs.mobileSubMenu.focus()
                    })
                },
                isMobileMainMenuOpen: false,
                openMobileMainMenu() {
                    this.isMobileMainMenuOpen = true
                    this.$nextTick(() => {
                        this.$refs.mobileMainMenu.focus()
                    })
                },
            }
        }
    </script>

    @livewireScripts

</body>

</html>
