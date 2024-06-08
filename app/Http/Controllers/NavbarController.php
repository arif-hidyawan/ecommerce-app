<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function renderNavbar()
    {
        $cartItemCount = $this->cartService->getCartItemCount();
        return view('layouts.app', ['cartItemCount' => $cartItemCount]);
    }
}
