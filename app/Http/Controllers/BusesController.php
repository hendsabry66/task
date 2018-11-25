<?php

namespace App\Http\Controllers;

use App\Bus;
use Illuminate\Http\Request;

class BusesController extends Controller
{
    public function index()
    {
        $buses = Bus::all();
        return view('buses.index',compact('buses'));
    }

    public function create()
    {
        return view('buses.create');
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'number'=>'required',
            'from'=>'required',
            'to'=>'required',
        ]);

        $new_child = Bus::create([
            'number' => $request->number,
            'from' => $request->from,
            'to' => $request->to,

        ]);

        if($new_child)
        {
            return redirect(url('bus'))->with(['success'=>'Children Created Successfully']);
        }else{
            return redirect()->back()->with(['Fail'=>'Children Created Failed']);
        }

    }

    public function direction($id)
    {
        $dir = Bus::find($id);
        $form = $dir->from;
        $test_form = explode(',',$form);

        $to = $dir->to;
        $test_to = explode(',',$to);
        return view('buses.direction',compact('dir','test_form','test_to'));
    }
}
