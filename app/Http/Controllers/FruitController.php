<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fruit;

class FruitController extends Controller
{
    public function getFruit() {
        return response()->json(Fruit::all(), 200);
    }

    public function getFruitById($id) {
        $fruit = Fruit::find($id);
        if(is_null($fruit)) {
            return response()->json(['message' => 'Fruit not found']);
        }
        return response()->json($fruit, 200);
    }

    public function addFruit(Request $request) {
        $fruit = Fruit::create($request->all());
        return response($fruit);
    }
}
