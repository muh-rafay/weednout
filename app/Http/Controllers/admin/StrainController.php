<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Strain;
use App\Models\Assesment;

class StrainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $strains = Strain::latest()->get();
        return view('admin.strain.index',compact('strains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assesments = Assesment::get();
        return view('admin.strain.create',compact('assesments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = null;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= $file->getClientOriginalName();
           $image =  $file-> move(public_path('public/Image'), $filename);
        }
        Strain::create([
            'name'           => $request->title,
            'terpeneName'    => $request->terpeneName,
            'typeofstrain'   => $request->typeofstrain,
            'effect'         => $request->effect,
            'sideeffects'    => $request->sideeffects,
            'Terpeneprofile' => $request->Terpeneprofile,
            'image'          => $image,

        ]);
        return redirect()->route('strains.index')->with('success',"Strain Submitted");
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
        $strain = Strain::where('id',$id)->first();
        return view('admin.strain.edit',compact('strain'));
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
        $image = null;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= $file->getClientOriginalName();
            $image =  $file-> move(public_path('public/Image'), $filename);
        }
        else{
            $im = Strain::where('id',$id)->first();
            $image= $im->image;
        }
        Strain::where('id',$id)->update([
            'name'           => $request->title,
            'terpeneName'    => $request->terpeneName,
            'typeofstrain'   => $request->typeofstrain,
            'effect'         => $request->effect,
            'sideeffects'    => $request->sideeffects,
            'Terpeneprofile' => $request->Terpeneprofile,
            'image'          => $image,

        ]);
        return redirect()->route('strains.index')->with('success',"Strain Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $strain = Strain::where('id',$id)->first();
        $strain->delete();
        return redirect()->route('strains.index')->with('danger',"Strain Deleted Succesfully");
    }
}
