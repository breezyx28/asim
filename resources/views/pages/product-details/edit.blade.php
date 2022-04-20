
@extends('layouts.dashboard')

@section('title')
    تحديث المنتج
@endsection

@section('content')
    <!-- Container -->
<div class="flex flex-col h-auto bg-gray-100">
    <!-- Card Container -->
    <div class="grid place-items-center mx-2 my-20 sm:my-auto">
        <!-- Card -->
        <div
            class="w-11/12 p-12 sm:w-8/12 md:w-10/12 lg:w-10/12 2xl:w-4/12
            px-6 py-10 sm:px-10 sm:py-6
            bg-white rounded-lg shadow-md lg:shadow-lg">

            <!-- Card Title -->
            <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">
                تحديث المنتج
            </h2>

            <x-alerts.alert />

            <form class="mt-10" method="POST" action="{{ route('productDetails.update', $data['id']) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <x-inputs.text-input id="section" name="section" placeholder="أكتب إسم القطاع" type="text"
                    label="إسم القطاع"  />

                <x-inputs.text-input id="feature" name="feature" placeholder="أكتب إسم التقنية" type="text"
                    label="إسم التقنية"  />

                <x-inputs.textarea id="description" name="description" placeholder="أكتب وصف التقنية" type="text"
                    label="وصف التقنية"  />

                <x-inputs.select-options id="product_id" name="product_id" :items="$products" label="المنتج"
                     />

                <button type="submit"
                    class="w-full py-3 mt-10 bg-gray-800 rounded-sm
                    font-medium text-white uppercase
                    focus:outline-none hover:bg-gray-700 hover:shadow-none">
                    تحديث
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
