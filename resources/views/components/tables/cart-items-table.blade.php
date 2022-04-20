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
                        @forelse ($items as $item)
                            <livewire:tables.cart-items-tr :item="$item"/>
                        @empty
                            <tr class="bg-gray-100">
                                <td colspan="4" class="text-center text-sm text-gray-400 px-6 py-14 whitespace-nowrap">
                                    السلة فارغة</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
