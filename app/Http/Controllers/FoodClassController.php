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
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
        $foodType = new FoodType;
        if ($request->foodTypeImage != null) {
            $imageName = time().'.'.$request->foodTypeImage->getClientOriginalExtension();
            $request->foodTypeImage->move(public_path('uploadedImages'), $imageName);
            $foodType->image = time().'.'.$request->foodTypeImage->getClientOriginalExtension();
        }
        
        $foodType->arabic_name = $request->arabicName;
        $foodType->english_name = $request->englishName;
        $foodType->turkish_name = $request->turkishName;
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
        $type = FoodType::find($id);
        return view('foodClasses.details', ['type' => $type]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = FoodType::find($id);
        return view('foodClasses.edit', ['type' => $type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FoodTypeRequest $request, $id)
    {
        $foodType = FoodType::find($id);
        if ($request->foodTypeImage != null) {
            $imageName = time().'.'.$request->foodTypeImage->getClientOriginalExtension();
            $request->foodTypeImage->move(public_path('uploadedImages'), $imageName);
            $foodType->image = time().'.'.$request->foodTypeImage->getClientOriginalExtension();
        }
        
        $foodType->arabic_name = $request->arabicName;
        $foodType->english_name = $request->englishName;
        $foodType->turkish_name = $request->turkishName;
        $foodType->save();

        return redirect()->route('foodClasses.index');
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
