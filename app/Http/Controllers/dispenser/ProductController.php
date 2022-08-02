<?php

namespace App\Http\Controllers\dispenser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('created_by', auth()->user()->id)->latest()->get();
        return view('dispenser.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dispenser.product.create');
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
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage =  $request->image;
           $image =  $image->move($destinationPath, $profileImage);

        }
        Product::create([
            'name'          => $request->name,
            'ingredient'    => $request->ingredient,
            'feature'       => $request->feature,
            'price'         => $request->price,
            'location'      => $request->location,
            'zipcode'      =>  $request->zipcode,
            'description'   => $request->description,
            'image'         => $image,
            'created_by'    => Auth::user()->id

        ]);
        return redirect()->route('dispenser_products.index')->with('success',"Product Updated");

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
        $product = Product::where('id',$id)->first();
        return view('dispenser.product.edit',compact('product'));
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
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage =  $request->image;
           $image =  $image->move($destinationPath, $profileImage);

        }
        else{
            $im    = Product::where('id',$id)->first();
            $image = $im->image;
        }
        Product::where('id',$id)->update([
            'name'          => $request->name,
            'ingredient'    => $request->ingredient,
            'feature'       => $request->feature,
            'price'         => $request->price,
            'location'      => $request->location,
            'description'   => $request->description,
            'image'         => $image,
            'created_by'    => Auth::user()->id

        ]);
        return redirect()->route('dispenser_products.index')->with('success',"Product Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('success',"Product delete");

    }
}
