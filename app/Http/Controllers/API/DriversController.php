<?php

namespace App\Http\Controllers\API;

use App\Bus;
use App\Http\Controllers\Controller;
use App\Driver;
use Illuminate\Http\Request;

class DriversController extends Controller
{

//    public function index()
//    {
//        $drivers = Driver::all();
//        return view('drivers.index',compact('drivers'));
//    }
//
//    public function create()
//    {
//        $bus = Bus::pluck('number','id')->toArray();
//        return view('drivers.create',compact('bus'));
//    }
//
//    public function store(Request $request)
//    {
//
//        $this->validate($request,[
//            'name'=>'required',
//            'address'=>'required',
//            'phone'=>'required',
//            'bus_id'=>'required',
//        ]);
//
//        $new_driver = Driver::create([
//            'name' => $request->name,
//            'address' => $request->address,
//            'phone' => $request->phone,
//            'bus_id' => $request->bus_id,
//
//        ]);
//
//        if($new_driver)
//        {
//            return redirect(url('drivers'))->with(['success'=>'Driver Created Successfully']);
//        }else{
//            return redirect()->back()->with(['Driver'=>'User Created Failed']);
//        }
//
//    }
//
//    public function edit($id)
//    {
//        $drivers = Driver::findOrFail($id);
//        $bus = Bus::pluck('number','id')->toArray();
//
//        return view('drivers.edit',compact('drivers','bus'));
//    }
//
//    public function update(Request $request,$id)
//    {
//        $drivers = Driver::findOrFail($id);
//
//        $new_driver = $drivers->update([
//            'name' => $request->name,
//            'address' => $request->address,
//            'phone' => $request->phone,
//            'bus_id' => $request->bus_id,
//
//        ]);
//
//        if($new_driver)
//        {
//            return redirect(url('drivers'))->with(['success'=>'Driver Updated Successfully']);
//        }else{
//            return redirect()->back()->with(['Driver'=>'User Updated Failed']);
//        }
//    }
//
//    public function destroy($id)
//    {
//        $drivers = Driver::findOrFail($id);
//        $drivers->delete();
//        return redirect(url('drivers'))->with(['success'=>'Driver Updated Successfully']);
//
//    }



    public function index()
    {
        return Driver::all();
    }

    public function store(Request $request)
    {
        $driver = Driver::create($request->all());

        return response()->json($driver, 201);
    }

    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }

}
