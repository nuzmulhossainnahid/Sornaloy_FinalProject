<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Slider;
use App\Models\NidTable;
use App\Models\LoanApplier;
use App\Models\CustomerRequest;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $data = Slider::all();
                return view('user.home.home',compact('data'));
            }
            elseif (Auth::user()->usertype=='2')
            {

                return view('employAdmin.home');
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }

        else
        {
            $data = Slider::all();
            return view('user.home.home',compact('data'));
        }
    }

    public function loan_calculator()
    {
        return view('user.loanCalculator.loanCalculator');
    }

    public function howToApply()
    {
        return view('user.howToApply.howToApply');

    }


    public function apply_loan()
    {

        return view('user.apply_loan.apply_loan');
    }

    public function apply_loan_customer(Request $request)
    {
        if(Auth::id())
        {
            $NIDNo=$request->nidNo;
            $dateofBirth = $request->dateofBirth;


            $data = NidTable::where('NIDNo','=',$NIDNo)
            ->where('DateofBirth','=',$dateofBirth)->first();


            $ch=curl_init();
            curl_setopt($ch,CURLOPT_URL,"http://ip-api.com/json");
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
            $result=curl_exec($ch);
            $result=json_decode($result);

            if($result->status=='success'){
                $result;
                }




            if( $data)
            {
                return view('user.howToApply.apply',compact('data','result'));
            }
            else{
                return view('user.howToApply.notfound');
            }



        }
        else
        {
            return redirect('login');
        }




    }

    public function apply_loan_request(Request $request)
    {
        $data = new CustomerRequest;
        if(Auth::id())
        {
            $data->userId= Auth::user()->id;
        }
        $data->Name = $request->Name;
        $data->nid = $request->nid;
        $data->address = $request->address;
        $data->presentAddress = $request->presentAddress;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->goldAmount = $request->goldAmount;
        $data->LoanAmount = $request->LoanAmount;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('CustomerRequestImage'), $filename);
            $data['image']= $filename;
        }
        $data->save();

    }

    public function app()
    {
        return view('user.howToApply.apply');
    }
}
