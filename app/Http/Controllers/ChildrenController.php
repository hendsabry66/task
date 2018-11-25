<?php

namespace App\Http\Controllers;

use App\Bus;
use App\Child;
use Illuminate\Http\Request;

class ChildrenController extends Controller
{
    public function index()
    {
        $children = Child::all();
        return view('children.index',compact('children'));
    }

    public function create()
    {
        $bus = Bus::pluck('number','id')->toArray();
        return view('children.create',compact('bus'));
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'name'=>'required',
            'bus_id'=>'required',
        ]);

        $new_child = Child::create([
            'name' => $request->name,
            'bus_id' => $request->bus_id,

        ]);

        if($new_child)
        {
            return redirect(url('children'))->with(['success'=>'Children Created Successfully']);
        }else{
            return redirect()->back()->with(['Fail'=>'Children Created Failed']);
        }

    }
}
