<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderService;
use App\Services\CartService;
use App\Models\Order;  // Make sure to import the Order model

class OrderController extends Controller
{
    protected $orderService;
    protected $cartService;

    public function __construct(OrderService $orderService, CartService $cartService)
    {
        $this->orderService = $orderService;
        $this->cartService = $cartService;
    }

    public function placeOrder(Request $request)
    {
        // Get the authenticated user's ID
        $userId = auth()->user()->id;

        // Calculate the total price using the cart service
        $totalPrice = $this->cartService->total_price();

        // Prepare the order data
        $orderData = [
            'user_id' => $userId,
            'total_price' => $totalPrice,
            'status' => 'pending', // or any other initial status
        ];

        // Place the order using the OrderService
        $order = $this->orderService->placeOrder($orderData);

        // Clear the cart after placing the order
        $this->cartService->clearCart();

        // Redirect to the success page
        return redirect()->route('orders.success');
    }

    public function index()
    {
        // Get the authenticated user's orders
        $orders = Order::where('user_id', auth()->id())->get();

        // Return the view with the orders data
        return view('orders.index', ['orders' => $orders]);
    }

    public function success()
    {
        // Return the success view
        return view('orders.success');
    }
}
