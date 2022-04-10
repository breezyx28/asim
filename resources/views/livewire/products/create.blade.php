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
                إنشاء مستخدم
            </h2>

            <x-alerts.alert />

            <form class="mt-10" method="POST" action="{{ route('products.store') }}"
                enctype="multipart/form-data">
                @csrf

                <x-inputs.file-input name="image" title="إختر صورة للمنتج" required="true" />

                <x-inputs.text-input id="name" name="name" placeholder="أكتب إسم المنتج" type="text" label="إسم المنتج"
                    required="true" />

                <x-inputs.text-input id="price" name="price" placeholder="أكتب سعر المنتج" type="number"
                    label="سعر المنتج" required="true" />

                <x-inputs.text-input id="brand" name="brand" placeholder="أكتب إسم الشركة" type="text"
                    label="إسم الشركة" required="true" />

                <x-inputs.select-options id="category_id" name="category_id" :items="$items" label="الأصناف"
                    required="true" />

                <x-inputs.textarea label="وصف المنتج" id="description" name="description" placeholder="أكتب وصف المنتج"
                    required="true" />

                <button type="submit"
                    class="w-full py-3 mt-10 bg-gray-800 rounded-sm
                    font-medium text-white uppercase
                    focus:outline-none hover:bg-gray-700 hover:shadow-none">
                    إنشاء
                </button>
            </form>
        </div>
    </div>
</div>
