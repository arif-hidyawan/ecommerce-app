<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use Illuminate\Http\Request;


class CartController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index()
    {
        $cartItems = $this->cartService->getCart();
        return view('cart.index', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        // Validate request and add item to cart
        $this->cartService->addToCart($request->all());
        return redirect()->route('cart.index');
    }

    public function removeFromCart($index)
    {
        $this->cartService->removeFromCart($index);
        return redirect()->route('cart.index');
    }
}


