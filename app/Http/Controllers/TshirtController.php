<?php

namespace App\Http\Controllers;

use App\Models\TshirtM;
use Illuminate\Http\Request;

class TshirtController extends Controller
{
    
    public function index()
    {
        return view('welcome', ['list' => TshirtM::all()]);
    }

  
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
        $tshirtObj = TshirtM::find($id);
        return view('/editPage', ['data' => $tshirtObj]);
    }

   
    public function update(Request $request)
    {
        $tshirtObj = TshirtM::find($request->id);
        $tshirtObj->BatchNo = $request->batchNo;
        $tshirtObj->Qty = $request->qty;
        $tshirtObj->createdAt = $request->createdAt;
        $tshirtObj->Status = $request->status;
        $tshirtObj->Remarks = $request->remarks;

        $tshirtObj->save();
        return redirect('/');
    }

    
  
}
