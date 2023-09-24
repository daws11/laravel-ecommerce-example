<?php

use Carbon\Carbon;

function presentPrice($price)
{
    // Validasi apakah $price adalah numerik sebelum memformat
    if (is_numeric((int)$price)) {
        return 'Rp' . number_format((int)$price / 100, 3);
    } else {
        return 'Invalid Price';
    }
}

function presentDate($date)
{
    return Carbon::parse($date)->format('M d, Y');
}

function setActiveCategory($category, $output = 'active')
{
    return request()->category == $category ? $output : '';
}

function productImage($path)
{
    return $path && file_exists('storage/'.$path) ? asset('storage/'.$path) : asset('img/not-found.jpg');
}

function getNumbers()
{
    // $tax = config('cart.tax') / 100;
    // $discount = 0;
    
    // $coupon = session()->get('coupon');
    
    // if ($coupon && isset($coupon['discount'])) {
    //     $discount = is_numeric($coupon['discount']) ? $coupon['discount'] : 0;
    // }
    
    $subtotal = is_numeric(Cart::subtotal()) ? Cart::subtotal() : 0;
    $newSubtotal = max($subtotal, 0);
    
    $newTax = $newSubtotal ;
    $newTotal = $newSubtotal;

    return collect([
        // 'tax' => $tax,
        // 'discount' => $discount,
        'newSubtotal' => $newSubtotal,
        'newTax' => $newTax,
        'newTotal' => $newTotal,
    ]);
}



function getStockLevel($quantity)
{
    if ($quantity > setting('site.stock_threshold', 5)) {
        $stockLevel = '<div class="badge badge-success">In Stock</div>';
    } elseif ($quantity <= setting('site.stock_threshold', 5) && $quantity > 0) {
        $stockLevel = '<div class="badge badge-warning">Low Stock</div>';
    } else {
        $stockLevel = '<div class="badge badge-danger">Not available</div>';
    }

    return $stockLevel;
}