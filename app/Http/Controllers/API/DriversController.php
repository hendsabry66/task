<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Driver;
use Illuminate\Http\Request;

class DriversController extends Controller
{

    public function index()
    {
        return Driver::all();
    }

    public function store(Request $request)
    {
        $driver = Driver::create($request->all());

        return response()->json($driver, 201);
    }

    public function update(Request $request, Driver $driver)
    {
        $driver->update($request->all());

        return response()->json($driver, 200);
    }

    public function delete(Driver $driver)
    {
        $driver->delete();

        return response()->json(null, 204);
    }

}
