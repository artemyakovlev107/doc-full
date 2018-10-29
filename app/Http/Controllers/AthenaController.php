<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\AthenaModel;

class AthenaController extends Controller
{
    public function GetData(Request $request)
    {
        # code...
        $this->validate($request, [
            'pharmacy_name'=>'required',
            'address'=>'required'
        ]);

        $pharmacy = new AthenaModel;
        $pharmacy->pharmacy_name = $request->input('pharmacy_name');
        $pharmacy->address = $request->input('address');
        $pharmacy->save();

        return 'SUCCESS';
    }
}
