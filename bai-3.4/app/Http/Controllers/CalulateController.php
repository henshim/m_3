<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalulateController extends Controller
{
    public function __invoke(Request $request)
    {

    }

    public function show(Request $request)
    {
        $number = $request->input();

    }
}
