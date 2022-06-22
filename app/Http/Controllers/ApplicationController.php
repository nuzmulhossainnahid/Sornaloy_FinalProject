<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\BankSechedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{
    public function application(Request $request)
    {
        $data = new Application;
        if(Auth::id())
        {
            $data->userId= Auth::user()->id;
        }

        $userId =$data->userId;
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
        return view('user.apply_loan.secdule',compact('userId'));
    }

    public function apply_bank_home()
    {
        $data = BankSechedule::where('condition', '=', 0)
            ->select('date', DB::raw('count(*) as total'))
            ->groupBy('date')
            ->get();

        return view('user.apply_loan.secdule_bank',compact('data'));
    }

    public function find_bank_branch(Request $request)
    {
        $date = $request->date;
        $data = BankSechedule::where('date', '=', $request->date)
            ->select('bankName', DB::raw('count(*) as total'))
            ->groupBy('bankName')
            ->get();
        return view('user.apply_loan.find_bank_branch',compact('data','date'));
    }

    public function bank_branch_time(Request $request)
    {
        $data = BankSechedule::where('condition', '=', 0)
            ->where('date', '=', $request->date)
            ->where('bankName', '=', $request->bankName)
            ->get();
        return $data;
    }
}
