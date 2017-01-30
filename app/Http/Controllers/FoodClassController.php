<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\File;

use App\Http\Requests\FoodTypeRequest;

use App\FoodType;

class FoodClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $foodTypes = FoodType::All();
        return view('foodClasses.index', ['types' => $foodTypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foodClasses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FoodTypeRequest $request)
    {
        $imageName = time().'.'.$request->foodTypeImage->getClientOriginalExtension();
        $request->foodTypeImage->move(public_path('uploadedImages'), $imageName);
        $foodType = new FoodType;
        $foodType->arabic_name = $request->arabicName;
        $foodType->english_name = $request->englishName;
        $foodType->turkish_name = $request->turkishName;
        $foodType->image = time().'.'.$request->foodTypeImage->getClientOriginalExtension();
        $foodType->save();

        return redirect()->route('foodClasses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foodType = FoodType::find($id);
        $image = $foodType->image;
        FoodType::destroy($id);
        
        File::delete('uploadedImages/' .$image);
        return redirect()->route('foodClasses.index');
    }
}
