@extends('layouts.app')

@section('title')
    الدفع
@endsection

@section('main')
    <x-nav.main-nav />
    <main class="px-4 md:px-20 py-10 min-h-screen w-full">
        <div class="text-xl md:text-3xl font-semibold text-stone-800">إجراء الدفع</div>

        <x-alerts.alert />

        <div class="wrapper flex justify-center w-full pt-2">
            {{-- <x-alerts.alert /> --}}
            <form method="POST" action="{{ route('checkouts.store') }}"
                class="w-full border border-stone-300 flex flex-col gap-y-4 rounded p-4">
                @csrf
                <input type="hidden" name="order_number" value="{{ strtotime("now"); }}">
                <div class="w-full grid md:grid-cols-1 grid-cols-1 gap-3">
                    <div class="w-full flex flex-col gap-3">
                        <label for="" class="font-semibold text-lg">القيمة النهائية</label>
                        <input type="text" class="w-full p-2 border border-stone-300 rounded-lg" name="total_price" value="{{ $totalPrice }}" readonly required
                            placeholder="">
                    </div>
                </div>
                <div class="w-full">
                    <div class="w-full flex flex-col gap-3">
                        <label for="" class="font-semibold text-lg">طريقة الدفع</label>
                        <select name="payment_method_id" class="w-full p-2 border border-stone-300 text-left rounded-lg" required>
                            <option readonly>إختر طريقة الدفع</option>
                           @foreach ($paymentMethods as $method)
                               <option value="{{ $method['id'] }}">{{ $method['name'] }}</option>
                           @endforeach
                        </select>
                    </div>
                </div>

                <div class="w-full grid md:grid-cols-1 grid-cols-1 gap-3">
                    <div class="w-full flex flex-col gap-3">
                        <label for="" class="font-semibold text-lg">رقم البطاقة <small class="text-xs">إذا كان خيارك لايحتوي على بطاقة الرجاء دع المجال فارغ</small></label>
                        <input type="number" class="w-full p-2 border border-stone-300 rounded-lg" name="payment_number"
                            placeholder="xxxx-xxxx-xxxx-xxxx-xxxx">
                    </div>
                </div>

                <button type="submit" class="w-full bg-stone-800 py-6 text-white rounded">
                    إجراء
                </button>
            </form>
        </div>
    </main>
@endsection
