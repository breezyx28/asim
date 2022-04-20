<div class="bg-stone-800 md:px-20 px-4 py-3 w-full">
    <div class="flex justify-between items-center text-white w-full">
        <div class="font-md">
            @guest
                <x-buttons.button route="/login" text="تسجيل دخول"/>
            @endguest

            @auth
            <x-buttons.button route="/dashboard" text="لوحة التحكم"/>
            @endauth
        </div>
        <div class="nav-links flex items-center gap-x-5">
            <ul class="uppercase flex gap-x-8">
                <li><a href="/">الرئيسية</a></li>
                <li><a href="/shopping">المتجر</a></li>
            </ul>

            {{-- shopping button --}}
            <livewire:buttons.cart-btn>
        </div>
    </div>
</div>
