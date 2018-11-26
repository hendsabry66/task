<?php

namespace App\Http\Controllers\API;

use App\Bus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusesController extends Controller
{

    public function index()
    {
        return Bus::all();
    }

    public function store(Request $request)
    {
        $buses = Bus::create($request->all());

        return response()->json($buses, 201);
    }

    public function update(Request $request, Bus $buses)
    {
        $buses->update($request->all());

        return response()->json($buses, 200);
    }

    public function delete(Bus $buses)
    {
        $buses->delete();

        return response()->json(null, 204);
    }

}
