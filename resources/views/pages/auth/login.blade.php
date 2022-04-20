@extends('layouts.auth')

@section('title')
    تسجيل دخول
@endsection

@section('main')
    <!-- component -->
    <div class="min-h-screen bg-gray-100 flex items-center w-full">
        <div class="container mx-auto max-w-md shadow-md hover:shadow-lg transition duration-300">
            <form method="POST" action="{{ route('loginAction') }}" class="py-12 md:p-10 p-4 bg-white rounded-xl">
                @csrf
                <div class="mb-6 flex flex-col">
                    <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">إسم المستخدم</label>
                    <input type="text"
                        name="username"
                        class="border bg-gray-100 py-2 px-4 md:w-96 w-full outline-none focus:ring-2 focus:ring-stone-400 rounded"
                        placeholder="قم بكتابة إسم المستخدم" required />
                </div>
                <div class="flex flex-col">
                    <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">كلمة السر</label>
                    <input type="password"
                        name="password"
                        class="border bg-gray-100 py-2 px-4 w-full md:w-96 outline-none focus:ring-2 focus:ring-stone-400 rounded"
                        placeholder="*****" required />
                </div>
                <button
                    type="submit"
                    class="w-full mt-6 text-indigo-50 font-bold bg-stone-800 py-3 rounded-md hover:bg-stone-500 transition duration-300">تسجيل</button>
                <div class="flex w-full justify-start gap-x-8 mt-3">
                    <a class="hover:underline hover:cursor-pointer transition duration-200 text-sm hover:text-indigo-500 text-gray-500"
                        href="/register">لا أملك حساب</a><a
                        class="hover:underline hover:cursor-pointer transition duration-200 text-sm hover:text-indigo-500 text-gray-500"
                        href="/">الرئيسية</a>
                </div>
            </form>
        </div>
    </div>
@endsection
