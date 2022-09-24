<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assesment;
use App\Models\Strain;
use App\Models\Product;

class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.assements.assessment');
    }
    public function get_assessment($link){
        $link = base64_decode($link);
        // dd($link);
        $assessments = Assesment::where('type',$link)->get();
        // dd($assessments);
        return view('client.assements.get_assessment',compact('assessments'));
    }
    public function get_strain(Request $request){

        $ids = $request->chk;
        $assessments =[];
        foreach($ids as $key => $asses){
           $assess =  Assesment::where('id',$asses)->pluck('title');
           array_push($assessments,$assess);
        }
        $strains = [];
        foreach($assessments as $key => $assessment){
           $strain = Strain::where('effect', 'like',$assessment)->get();

           if(!empty($strain) && $strain != null ){
               {
                array_push($strains,$strain);
               }

           }
        }

        return view('client.assements.strain',compact('strains'));
    }
    public function get_product(Request $request){
         $ids = $request->chk;
        $strains =[];
        foreach($ids as $key => $stra){
           $strain =  Strain::where('id',$stra)->get();
           array_push($strains,$strain);
        }
        $products = [];
        foreach($strains as $key => $strain){
            foreach($strain as $stra){

                $product = Product::where('feature', 'like','%' .$stra->typeofstrain. '%' )->orwhere('feature', 'like','%' .$stra->effect.'%' )->get();

                if(!empty($product) && $product != null ){
                    {
                     array_push($products,$product);
                    }

                }
            }


        }
        return view('client.assements.product',compact('products'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
