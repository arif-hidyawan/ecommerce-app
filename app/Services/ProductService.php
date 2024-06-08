<?php

// app/Services/ProductService.php

namespace App\Services;

class ProductService
{
    public function getProductList()
    {
        return session('products', []);
    }

    public function addProduct($product)
    {
        $products = session('products', []);
        // Ensure that 'name' key is set for the product
    if (!isset($product['name'])) {
        // If 'name' key is missing, set a default value or handle it based on your logic
        $product['name'] = 'Unnamed Product';
    }

    if (!isset($product['price'])) {
        // If 'price' key is missing, set a default value or handle it based on your logic
        $product['price'] = 0;
    }
        $product['id'] = count($products) + 1;
        $products[] = $product;
        session(['products' => $products]);
    }
}