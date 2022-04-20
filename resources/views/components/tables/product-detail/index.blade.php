<!-- component -->
<section class="antialiased bg-gray-100 text-gray-600 h-auto px-4">
    <div class="flex flex-col justify-center h-full">
        <!-- Table -->
        <div class="w-full max-w-4xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            {{-- <header class="px-5 py-4 border-b border-gray-100 flex flex-col gap-y-5">
                <h2 class="font-semibold text-gray-800">الأصناف</h2>
                <input id="search" type="search" name="search" placeholder="بحث"
                    class="block w-full py-3 px-1 mt-2 text-sm text-gray-400 appearance-none border-0 border-b-2 border-gray-100 focus:ring-0">
            </header> --}}
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-right">المنتج</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-right">المواصفات</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">
                            @forelse ( $products as $item )
                                <tr wire.loading.class.delay="opacity-50" wire:key="{{ $loop->index }}">
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="flex items-center gap-x-4">
                                            @php
                                                // fix image dir
                                                $image = str_replace('public', '', $item['image']);
                                            @endphp
                                            <img src="{{ $image }}" class="w-8 h-8 mx-3" />
                                            <div class="font-medium text-gray-800">{{ $item['name'] }}</div>
                                        </div>
                                    </td>


                                    <td class="p-2 whitespace-nowrap">
                                        <x-tables.product-detail.details :productId="$item['id']"/>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="p-2 whitespace-nowrap">
                                        <div class="font-medium">لا يوجد</div>
                                    </td>
                                </tr>
                                @endforelse
                        </tbody>
                    </table>

                    <div class="p-4" dir="ltr">
                        {{ $products->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
