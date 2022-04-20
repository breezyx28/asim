<?php

namespace App\Observers;

use App\Http\Services\BasketService;
use App\Http\Services\CartService;
use App\Models\Checkout;
use App\Models\Order;
use Illuminate\Support\Facades\Log;

class CheckoutObserver
{
    /**
     * Handle the post "saving" event.
     *
     * @param  \App\Post  $post
     * @return void
     */
    public function saving(Checkout $checkout)
    {
        $order = new Order();

        try {
            foreach (BasketService::allItems() as $key => $value) {

                $order::create([
                    'order_number' => $checkout->order_number,
                    'quantity' => $value['qty'],
                    'product_id' => $value['id'],
                    'created_at' => strtotime("now"),
                    'updated_at' => strtotime("now"),
                ]);
            }

            BasketService::destroyBasket();
            CartService::destroyCart();


            return true;
        } catch (\Throwable $th) {
            Log::alert('observer Error', [
                'error' => $th->getMessage()
            ]);
            return throw $th->getMessage();
        }
    }
}
