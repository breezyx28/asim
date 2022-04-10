@extends('layouts.auth')

@section('title')
    login
@endsection

@section('main')
    <!-- component -->
    <div class="min-h-screen bg-gray-100 flex items-center">
        <div class="container mx-auto max-w-md shadow-md hover:shadow-lg transition duration-300">
            <div class="py-12 p-10 bg-white rounded-xl">
                <div class="mb-6">
                    <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">Name</label>
                    <input type="text"
                        class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-stone-400 rounded"
                        placeholder="Your name" required />
                </div>
                <div class="">
                    <label class="mr-4 text-gray-700 font-bold inline-block mb-2" for="name">Email</label>
                    <input type="text"
                        class="border bg-gray-100 py-2 px-4 w-96 outline-none focus:ring-2 focus:ring-stone-400 rounded"
                        placeholder="@email" required />
                </div>
                <button
                    class="w-full mt-6 text-indigo-50 font-bold bg-stone-800 py-3 rounded-md hover:bg-stone-500 transition duration-300">LOGIN</button>
                <div class="flex w-full justify-start gap-x-8 mt-3">
                    <a class="hover:underline hover:cursor-pointer transition duration-200 text-sm hover:text-indigo-500 text-gray-500"
                        href="/register">I don't have
                        acount</a><a
                        class="hover:underline hover:cursor-pointer transition duration-200 text-sm hover:text-indigo-500 text-gray-500"
                        href="/">Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
