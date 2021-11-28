<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookingByReviewShowResource;

class BookingByReviewController extends Controller
{
    public function __invoke($reviewKey, Request $request)
    {
        $booking = Booking::findByReviewKey($reviewKey);
        return $booking ? new BookingByReviewShowResource($booking) : abort(404);
    }
   
}
