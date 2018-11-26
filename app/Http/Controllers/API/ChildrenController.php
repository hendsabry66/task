<?php

namespace App\Http\Controllers\API;

use App\Child;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChildrenController extends Controller
{

    public function index()
    {
        return Child::all();
    }

    public function store(Request $request)
    {
        $children = Child::create($request->all());

        return response()->json($children, 201);
    }

    public function update(Request $request, Child $children)
    {
        $children->update($request->all());

        return response()->json($children, 200);
    }

    public function delete(Child $children)
    {
        $children->delete();

        return response()->json(null, 204);
    }

}
