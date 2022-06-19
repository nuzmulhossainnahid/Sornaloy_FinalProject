<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ApplicationController extends Controller
{
    public function application(Request $request)
    {
        $data = new Application;
        if(Auth::id())
        {
            $data->userId= Auth::user()->id;
        }
        $data->name = $request->name;
        $data->fatherHusbandName = $request->fatherHusbandName;
        $data->motherName = $request->motherName;
        $data->dateOfBirth = $request->dateOfBirth;
        $data->nidNo = $request->nidNo;
        $data->occupation = $request->occupation;
        $data->phoneNo = $request->phoneNo;
        $data->email = $request->email;
        $data->permanentAddress = $request->permanentAddress;
        $data->state = $request->state;
        $data->presentAddress = $request->presentAddress;
        $data->postCode = $request->postCode;
        $data->city = $request->city;
        $data->country = $request->country;
        $data->goldAmount = $request->goldAmount;
        $data->goldType = $request->goldType;
        $data->loanAmount = $request->loanAmount;
        if($request->file('photo')){
            $file= $request->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Application_Image'), $filename);
            $data['photo']= $filename;
        }
        $data->save();
        return 'Request Send';
    }
}
