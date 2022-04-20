<?php

namespace App\Http\Services;

use Error;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartService
{
    public static function addToCart($id)
    {
        $items = Session::get('cart') ?? []; // []

        if (self::itemExists($id)) {
            // filter id
            $filter = collect($items ?? [])->filter(function ($value, $key) use (&$id) {
                return $value != $id;
            })->all();

            Session::put('cart', $filter);
            // $_SESSION['cart'] = $filter;

            return Session::get('cart');
            // return $_SESSION['cart'];
        } else {

            $filter = collect($items ?? [])->push($id)->all();

            Session::put('cart', $filter);
            // $_SESSION['cart'] = $filter;

            return Session::get('cart');
            // return $_SESSION['cart'];
        }
    }

    public static function itemExists($id)
    {
        $array = Session::get('cart');
        return in_array($id, $array ?? []);
    }

    public static function allItems()
    {

        return Session::get('cart') ?? [];
    }

    public static function allCount()
    {

        return count(self::allItems());
    }

    public static function destroyCart()
    {
        Session::put('cart', []);
        return true;
    }
}
