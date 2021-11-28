<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookable;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookableReviewIndexResource;


class BookableReviewController extends Controller
{
    public function __invoke($id, Request $request)
    {
        $bookable = Bookable::findOrFail($id);

        return BookableReviewIndexResource::collection(
            $bookable->reviews()->latest()->get()
        );
    }
}
