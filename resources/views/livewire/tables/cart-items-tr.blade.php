<tr>
    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
        <div class="product-img flex justify-center">
            @php
            // fix image dir
            $image = str_replace('public', '', $item['image']);
        @endphp
            <img src="{{ $image }}"
                class="md:w-20 lg:w-28 w-16" alt="">
        </div>
    </td>
    <td class="text-sm text-gray-900 font-light px-6 py-4 relative">
        <livewire:quantity-controll :itemId="$item['id']" :price="$item['price']"/>
    </td>
    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
        <div class="flex gap-x-2">
            <div class="text-green-400 font-semibold"> {{ $count * $item['price'] }} </div>
            <span>جنيه</span>
        </div>
    </td>
    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
        @mdo
    </td>
</tr>
