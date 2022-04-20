@extends('layouts.auth')

@section('title')
    تسجيل مستخدم
@endsection

@section('main')
    <!-- component -->
    <div class="min-h-screen bg-gray-100 flex items-center py-20">
        <div class="container mx-auto max-w-md shadow-md hover:shadow-lg transition duration-300">
            <form action="{{ route('storeUser') }}" method="POST" class="py-12 p-10 bg-white rounded-xl">
                <h1 class="text-3xl font-bold text-stone-800 text-center mb-5">تسجيل مستخدم</h1>
                <x-alerts.alert />
                @csrf
                <div class="mb-6 flex flex-col">
                    <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">الإسم</label>
                    <input type="text" name="name" id="name"
                        class="border bg-gray-100 py-2 px-4 md:w-96 w-full outline-none focus:ring-2 focus:ring-stone-400 rounded"
                        placeholder="الإسم كامل" required />
                </div>

                <div class="mb-6 flex flex-col">
                    <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="username">إسم المستخدم</label>
                    <input type="text" name="username" id="username"
                        class="border bg-gray-100 py-2 px-4 md:w-96 w-full outline-none focus:ring-2 focus:ring-stone-400 rounded"
                        placeholder="إسم المستخدم" required />
                </div>

                <div class="mb-6 flex flex-col">
                    <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">البريد</label>
                    <input type="email" name="email"
                        class="border bg-gray-100 py-2 px-4 md:w-96 w-full outline-none focus:ring-2 focus:ring-stone-400 rounded"
                        placeholder="@email" required />
                </div>

                <div class="mb-6 flex flex-col">
                    <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">العنوان</label>
                    <input type="text"
                        class="border bg-gray-100 py-2 px-4 md:w-96 w-full outline-none focus:ring-2 focus:ring-stone-400 rounded"
                        placeholder="العنوان" />
                </div>

                <div class="flex flex-col">
                    <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="password">كلمة السر</label>
                    <input type="password" name="password" id="password"
                        class="border bg-gray-100 py-2 px-4 md:w-96 w-full outline-none focus:ring-2 focus:ring-stone-400 rounded"
                        placeholder="****" required />
                </div>

                <button
                    class="w-full mt-6 text-indigo-50 font-bold bg-stone-800 py-3 rounded-md hover:bg-stone-500 transition duration-300">تسجيل</button>
                <div class="flex w-full justify-start gap-x-8 mt-3">
                    <a class="hover:underline hover:cursor-pointer transition duration-200 text-sm hover:text-indigo-500 text-gray-500"
                        href="/login">أملك حساب</a><a
                        class="hover:underline hover:cursor-pointer transition duration-200 text-sm hover:text-indigo-500 text-gray-500"
                        href="/">الرئيسية</a>
                </div>
            </form>
        </div>
    </div>
@endsection
