<a href="{{ route('cart') }}" class="border-2 border-white px-4 py-2 flex gap-x-1 relative">
    <div class="absolute rounded-full h-6 w-6 -right-3 text-center bg-red-600 text-xs border-2 border-stone-800">
        {{ $cartCount }}
    </div>
    <div class="relative w-full">
        <span class="far fa-shopping-cart"></span>
    </div>
    <div class="flex gap-x-1">
        <span>{{ $total }}</span><span>ج.س</span>
    </div>
</a>
