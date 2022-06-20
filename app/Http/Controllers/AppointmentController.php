<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\BankSechedule;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function bank_app()
    {
        return view('admin.appointment.bank');
    }
    public function bank_app_from(Request $request)
    {
        $data =new Bank;

        $data->bankName =$request->bankName;
        $data->branch =$request->branch;
        $data->address =$request->address;
        $data->working_hours =$request->working_hours;
        $data->save();
        return redirect()->back()->with('message','Bank Create Successfully.');

    }
    public function create_schedule()
    {
        return view('admin.appointment.create_schedule');
    }
    public function schedule_bank_create()
    {
        $data=Bank::select('bankName')
            ->groupBy('bankName')
            ->get();

        return view('admin.appointment.create_schedule_bank',compact('data'));
    }


    public function Crete_schedule_bank_from(Request $request)
    {

        $bankName = $request->bankName;
        $data = Bank::select('*')
            ->where('bankName', '=', $request->bankName)
            ->get();
        return view('admin.appointment.create_schedule_bank_view',compact('data','bankName'));
    }

    public function schedulfrom_bank(Request $request)
    {
        $data = new BankSechedule;

        $data->bankName=$request->bankName;
        $data->branch=$request->branch;
        $data->address=$request->address;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->condition=$request->condition;
        $data->save();
        return redirect('list_bankSchedule');
    }

    public function list_bankSchedule()
    {

        BankSechedule::where('date','<',Carbon::now())->delete();
        $data = DB::table("bank_sechedules")
            ->orderBy(DB::raw("DATE_FORMAT(date,'%Y-%M-%D')"), 'ASC')
            ->get();
        return view('admin.appointment.list_bankSchedul',compact('data'));
    }

    public function show_schedule()
    {
        return view('admin.appointment.show_schedule');
    }
}
