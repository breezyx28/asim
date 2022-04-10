<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full text-center">
                    <thead>
                        <tr class="">
                            <th scope="col" class="text-sm font-medium text-stone-300 px-6 uppercase">
                                المنتج
                            </th>
                            <th scope="col" class="text-sm font-medium text-stone-300 px-6 uppercase">
                                الكمية
                            </th>
                            <th scope="col" class="text-sm font-medium text-stone-300 px-6 uppercase">
                                السعر
                            </th>
                            <th scope="col" class="text-sm font-medium text-stone-300 px-6 uppercase">
                                الإجمالي
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                <div class="product-img flex justify-center">
                                    <img src="{{ asset('assets/products/splash_img.png') }}"
                                        class="md:w-20 lg:w-28 w-16" alt="">
                                </div>
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 relative">
                                <livewire:quantity-controll />
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                Otto
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                @mdo
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
