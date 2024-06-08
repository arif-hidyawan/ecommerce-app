<?php

namespace App\Services;

class CartService
{
    protected $cart;

    public function __construct()
    {
        $this->cart = session()->get('cart', []);
    }

    public function addToCart($item)
    {
        $this->cart[] = $item;
        session(['cart' => $this->cart]);
    }

    public function removeFromCart($index)
    {
        unset($this->cart[$index]);
        session(['cart' => $this->cart]);
    }

    public function getCart()
    {
        return $this->cart;
    }

    public function total_price()
    {
        $totalPrice = 0;

        foreach ($this->cart as $item) {
            if (isset($item['price'])) {
                $totalPrice += $item['price'];
            }
        }

        return $totalPrice;
    }

    public function clearCart()
    {
        session()->forget('cart');
    }

    public function getCartItemCount()
    {
        return count($this->cart);
    }
}
