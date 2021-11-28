<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookable;
use App\Http\Resources\BookableIndexResource;
use App\Http\Resources\BookableShowResource;

class BookableController extends Controller
{
    public function index()
    {
        return BookableIndexResource::collection(
            Bookable::all()
        );
    }

    public function show($id)
    {
        return new BookableShowResource(Bookable::findOrFail($id));
    }
}
