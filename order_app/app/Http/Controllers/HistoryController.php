<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $orders = Order::with(['items.menu.options'])->get();

        foreach ($orders as $order) {
            foreach ($order->items as $item) {
                if ($item->menu->options) {
                    foreach ($item->menu->options as $option) {
                        if (is_string($option->translations)) {
                            $option->translations = json_decode($option->translations, true);
                        }
                    }
                }
            }
        }

        $totalPrice = 0;
        foreach ($orders as $order) {
            foreach ($order->items as $item) {
                $itemPrice = $item->menu->price;

                if ($item->menu->options) {
                    foreach ($item->menu->options as $option) {
                        if (in_array($option->id, $item->options ?? [])) {
                            $itemPrice += $option->price;
                        }
                    }
                }

                $totalPrice += $itemPrice * $item->quantity;
            }
        }

        return view('menus.history', compact('orders', 'totalPrice'));
    }

    public function checkout()
    {
        $orders = Order::all();
        foreach ($orders as $order) {
            $order->items()->delete();
            $order->delete();
        }

        return view('menus.checkout');
    }


}
