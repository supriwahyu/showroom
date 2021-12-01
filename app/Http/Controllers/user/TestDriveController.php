<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use Validator;

class TestDriveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('user.testdrive', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.testdrive.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
                                    'name' => ['required'],
                                    'price' => ['required'],
                                    'size' => ['required'],
                                    'model' => ['required']
                    ]);
                    
        if($validator->fails()){
            return back()->with('error', 'Ada Beberapa form yang terlewat');
        }
        $name = $request->name;
        $price = $request->price;
        $size = $request->size;
        $model = $request->model;

        // $user = Auth::guard();

        $testdrive = new Car;
        $testdrive->name = $name;
        $testdrive->price = $price;
        $testdrive->size = $size;
        $testdrive->model = $model;
        $testdrive->save();
        return redirect()->route('testdrive')->with('success', 'Artikel berhasil terbuat');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cars = Car::find($id);
        return view('user.testdrive.view', compact('cars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cars = Car::find($id);

        return view('user.testdrive.edit', [
            'cars' => $cars
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cars = Car::find($id)->update($request->all());

        $name = $request->name;
        $price = $request->price;
        $size = $request->size;
        $model = $request->model;

        return redirect()->route('testdrive')->with('success',' Data telah diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cars = Car::find($id);
        $cars->delete();
        return redirect('testdrive')->with('success', 'Artikel berhasil terhapus');
    }
}
