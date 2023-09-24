<?php

namespace App\Listeners;

use App\Coupon;
use App\Jobs\UpdateCoupon;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CartUpdatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $couponData = session()->get('coupon');

        if ($couponData && isset($couponData['name'])) {
            $couponName = $couponData['name'];
            $coupon = Coupon::where('code', $couponName)->first();

            if ($coupon) {
                dispatch_now(new UpdateCoupon($coupon));
            }
        }
    }
}
