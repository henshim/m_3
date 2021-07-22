<?php

namespace App\Http\Controllers;

use App\Models\Cate;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $foods=Food::all();
        return view('food.list', compact('foods'));
    }

    public function add()
    {
        $cates=Cate::all();
        return view('food.add',compact('cates'));
    }

    public function store(Request $request)
    {
        $data=$request->all();
        $name=$data['name'];
        $price=$data['price'];
        $des=$data['description'];

        Food::query()->insert($request->name, $request->price, $request->description);
    }
}
