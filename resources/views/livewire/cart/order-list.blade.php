<div class="order-summery flex flex-col pt-5 gap-y-5">
    <div class="flex justify-between">
        <span class="text-stone-400 font-semibold uppercase">إجمالي الطلب</span>
        <span class="text-stone-400 font-semibold uppercase"> <span class="text-green-500"> {{ $items->sum('price') + $ext }}</span> جنيه </span>
    </div>

    <a href="{{ route('checkout') }}" class="bg-stone-800 text-white w-full text-center py-6 font-normal">
        الدفع
    </a>
</div>
