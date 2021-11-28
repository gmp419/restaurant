<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests\StoreChefsRequest;
use App\Http\Requests\UpdateChefsRequest;
use App\Models\Chefs;

class ChefsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chefs = Chefs::all();
        return view('admin.addChefs', compact('chefs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChefsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chef = new Chefs;
        $chef->name = $request->name;
        $chef->speciality = $request->speciality;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimages', $imagename);
        $chef->image = $imagename;
        $chef->link1 = $request->link1;
        $chef->link2 = $request->link2;
        $chef->link3 = $request->link3;
        $chef->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chefs  $chefs
     * @return \Illuminate\Http\Response
     */
    public function show(Chefs $chefs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chefs  $chefs
     * @return \Illuminate\Http\Response
     */
    public function edit(Chefs $chefs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChefsRequest  $request
     * @param  \App\Models\Chefs  $chefs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $chef = Chefs::find($id);

        $data = $request->all();   

        $chef->update($data);
        return redirect()->back();
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chefs  $chefs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chef = Chefs::find($id);
        $chef->delete();
        return redirect()->back();
    }

    public function updateChefdetail($id){
        $chefs = Chefs::find($id);
        return view('admin.updateChefdetail', compact('chefs'));
    }
}
