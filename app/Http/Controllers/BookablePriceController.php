<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookable;

class BookablePriceController extends Controller
{
    */
    public function __invoke($id, Request $request)
    {
        $bookable = Bookable::findOrFail($id);
        $data = $request->validate([
            'from' => 'required|date_format:Y-m-d',
            'to' => 'required|date_format:Y-m-d|after_or_equal:fro'
        ]);

        return response()->json([
            'data' => $bookable->priceFor($data['from'], $data['to'])
        ]);
    }
}
