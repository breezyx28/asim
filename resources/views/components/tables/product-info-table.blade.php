<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="border-b">
                        <tr class="w-full">
                            @foreach ($cols as $col)
                                <th class="text-left text-xl font-medium text-gray-900 py-4 px-10">
                                    {{ $col }}
                                </th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $key => $item)
                            <tr class="bg-gray-50 border-b text-center">
                                <td colspan="{{ count($cols) }}"
                                    class="text-left py-4 text-2xl font-semibold text-stone-800 uppercase px-10">
                                    {{ $key }}
                                </td>
                            </tr>
                            @foreach ($item as $key => $value)
                                <tr class="bg-white border-b">
                                    <td class="text-md font-normal text-gray-900 py-4 whitespace-nowrap px-10">
                                        {{ $key }}
                                    </td>
                                    <td class="text-sm text-gray-900 py-4 whitespace-nowrap px-10">
                                        {{ $value }}
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
