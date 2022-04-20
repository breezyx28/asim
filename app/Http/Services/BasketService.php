<?php

namespace App\Http\Services;

use App\Models\Product;
use Error;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BasketService
{
    public static function addToBasket($id, $qty = 1)
    {

        $items = Session::get('basket') ?? []; // []

        if (self::itemExists($id)) {
            // filter id
            $filter = collect($items ?? [])->filter(function ($value, $key) use (&$id) {
                return $value['id'] != $id;
            })->all();

            Session::put('basket', $filter);
            // $_SESSION['basket'] = $filter;

            return Session::get('basket');
            // return $_SESSION['basket'];
        } else {
            $filter = collect($items ?? [])->push(['id' => $id, 'qty' => $qty])->all();

            Session::put('basket', $filter);
            // $_SESSION['basket'] = $filter;

            return Session::get('basket');
            // return $_SESSION['basket'];
        }
    }

    public static function addQty($id, $qty = 1)
    {
        $items = Session::get('basket') ?? []; // []

        $filter = collect($items ?? [])->map(function ($value, $key) use (&$id, &$qty) {

            if ($value['id'] == $id) {
                $value['qty'] = $qty;
            }
            return $value;
        })->all();

        Session::put('basket', $filter);
        // $_SESSION['basket'] = $filter;

        return Session::get('basket');
    }

    public static function itemExists($id)
    {
        return collect(Session::get('basket') ?? [])->contains('id', $id);
    }

    public static function allItems()
    {

        return Session::get('basket') ?? [];
    }

    public static function allCartIds()
    {

        return Session::get('cart') ?? [];
    }

    public static function allCount()
    {

        return count(self::allItems());
    }

    public static function totalPrice()
    {
        return collect(self::allItems())->sum(function ($items) {
            return $items['qty'] * Product::find($items['id'])->price;
        });
    }

    public static function destroyBasket()
    {
        Session::put('basket', []);
        return true;
    }
}
