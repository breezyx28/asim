<div class="w-full h-72 border border-stone-200 rounded">
    <div class="h-full w-full flex flex-col gap-y-1 px-10">
        @php
            // fix image dir
            $image = str_replace('public', '', $items['image']);
        @endphp
        <img src="{{ $image }}" class="h-3/4 object-contain pt-2" alt="">

        <div class="w-full flex flex-col justify-center gap-1">
            <h4 class="text-center font-semibold" style="font-size: 75%">{{ $items['name'] }}</h4>
            <div class="w-full flex justify-center gap-x-1">
                <div class="wrapper w-full flex justify-even gap-x-2">
                    <a href="/item?id={{ $items['id'] }}"
                        class="hover:bg-stone-800 hover:text-white hover:rounded border border-stone-400 p-1 text-center font-semibold rounded hover:border-stone-800 w-full"
                        title="view">
                        <i class="fas fa-exclamation w-full"></i>
                    </a>
                    <a href="#"
                        class="hover:bg-stone-800 hover:text-white hover:rounded border border-stone-400 p-1 text-center font-semibold rounded hover:border-stone-800 w-full">
                        <i class="far fa-shopping-cart w-full"></i>
                    </a>
                    <a href="#"
                        class="hover:bg-stone-800 hover:text-white hover:rounded border border-stone-400 p-1 text-center font-semibold rounded hover:border-stone-800 w-full">
                        <i class="far fa-dollar-sign w-full"></i>
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>
