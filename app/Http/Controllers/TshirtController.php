<?php

namespace App\Http\Controllers;

use App\Models\TshirtM;
use Illuminate\Http\Request;

class TshirtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome', ['list' => TshirtM::all()]);
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
        $tshirtObj = new TshirtM();
        $tshirtObj->BatchNo = $request->batchNo;
        $tshirtObj->Qty = $request->qty;
        $tshirtObj->createdAt = $request->createdAt;
        $tshirtObj->Status = $request->status;
        $tshirtObj->Remarks = $request->remarks;

        $tshirtObj->save();
        return redirect('/');
    }

      public function delete($id)
    {
        $tshirtObj = TshirtM::find($id);
        $tshirtObj->delete();
        return redirect('/');
    }
    
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
  
}
