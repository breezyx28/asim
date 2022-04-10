<!-- table component -->
<div>
    <div class="antialiased bg-gray-100 text-gray-600 h-auto px-4">
        <div class="flex flex-col justify-center h-full">
            <!-- Table -->
            <div class="w-full max-w-4xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                <header class="px-5 py-4 border-b border-gray-100 flex flex-col gap-y-5">
                    <h2 class="font-semibold text-gray-800">المستخدمين</h2>
                    <input id="search" wire:model="search" type="search" name="search" placeholder="بحث"
                        class="block w-full py-3 px-1 mt-2 text-sm text-gray-400 appearance-none border-0 border-b-2 border-gray-100 focus:ring-0" />

                </header>
                <div class="p-3">
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                <tr>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-right">الإسم كامل</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-right">إسم المستخدم</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-right">البريد الإلكتروني</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-right">العنوان</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-sm divide-y divide-gray-100">
                                @if (collect($results)->count() > 0)
                                    @foreach ($results as $item)
                                        <tr wire.loading.class.delay="opacity-50" wire:key="{{ $loop->index }}">
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="font-medium text-gray-800">{{ $item['name'] }}</div>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="font-medium text-right">{{ $item['username'] }}</div>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="text-right">{{ $item['email'] }}</div>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                @if ($item['address'])
                                                    <div class="text-lg text-right">{{ $item['address'] }}</div>
                                                @else
                                                    <div class="text-xs italic text-right text-gray-400">لا يوجد
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="p-2 whitespace-nowrap">
                                            <div class="font-medium">لا يوجد</div>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                        <div class="p-4">
                            {{ $results->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
