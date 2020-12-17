<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\Item;
use App\Models\SubFamily;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Families = Family::with('subFamily')->get();
        $items = Item::orderBy("sysCreatedDate",'desc')->paginate(10);
        //dd($Families->Id);
        return view('product.home', compact('items','Families'));
    }

    public function show($id)
    {
        $item = Item::where('Id',$id)->first();

        return view('product.show')->with('item',$item);
    }


        public function itembyCaption($Id){
            $data=[];
             $Families = Family::with('subFamily')->get();
             $items  = Item::where('FamilyId', $Id)->paginate(10);;
            return view('product.home',compact('items','Families'));
        }
        public function itembysubFamily($Id){

            $Families = Family::with('subFamily')->get();
            $items  = Item::where('SubFamilyId', $Id)->paginate(10);
            return view('product.home',compact('items','Families'));
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
