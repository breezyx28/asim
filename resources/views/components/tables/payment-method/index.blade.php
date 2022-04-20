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
                                    <div class="font-semibold text-right">الإسم</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-right">رقم الدفع</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-right">تاريخ الإنشاء</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-right">تاريخ التعديل</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-right">العمليات</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">
                            @forelse ( $results as $item )
                                <tr wire.loading.class.delay="opacity-50" wire:key="{{ $loop->index }}">
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="font-medium text-gray-800">{{ $item['name'] }}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="font-medium text-gray-800">{{ $item['payment_number'] }}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-right">{{ $item['created_at'] }}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-right">{{ $item['updated_at'] }}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <form
                                            method="POST"
                                            onsubmit="return confirm('هل أنت متأكد ؟');"
                                            action="{{ route('paymentMethods.destroy', $item['id']) }}"
                                            class="flex"
                                            >
                                            @csrf
                                            @method('DELETE')

                                            <a href="{{ route('paymentMethods.edit', $item['id'])}}" class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                            <button type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </form>
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
                        {{ $results->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
