<?php

namespace App\Http\Controllers;
use App\Models\Application;
use App\Models\Slider;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function slider_view()
    {

        return view('admin.slider.slider_view');
    }
    public function create_slider(Request $request)
    {
        $data = new Slider;
        $data->sliderTitle = $request->sliderTitle;
        $data->sliderText = $request->sliderText;
        $data->sliderBtn = $request->sliderBtn;
        $data->link = $request->link;
        $data->btncolor = $request->btncolor;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/SliderImage'), $filename);
            $data['image']= $filename;
        }
        $data->save();
        return redirect()->back()->with('message','Slider Create Sucessfully.');

    }

    public function slider_table()
    {
        $data = Slider::all();

        return view('admin.slider.slider_table',compact('data'));
    }

    public function delete_slider($id)
    {

    $data = Slider::find($id);
    $data->delete();
    return redirect()->back();
    }

    public function edit_slider($id)
    {
        $data = Slider::find($id);
        return view('admin.slider.slider_editView',compact('data'));
    }

    public function edit_sliderConf(Request $request,$id)
    {
        $data = Slider::find($id);
        $data->sliderTitle = $request->sliderTitle;
        $data->sliderText = $request->sliderText;
        $data->sliderBtn = $request->sliderBtn;
        $data->link = $request->link;
        $data->btncolor = $request->btncolor;
        if($request->file('image'))
        {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/SliderImage'), $filename);
            $data['image']= $filename;
        }
        $data->save();
        return redirect()->back()->with('message','Slider Edit Sucessfully.');

    }


//    Web User View


public function webUserView()
{
    $data = User::where('usertype', '=', 0)->orderBy('id', 'DESC')->get();
    return view('admin.webuser.view',compact('data'));
}



//Employ

public function createEmploy()
{
    $data = User::where('usertype', '=', 0)->orderBy('id', 'DESC')->get();
    return view('admin.employ.create',compact('data'));
}
public function add_employ($id)
{
    $data = User::find($id);
    return view('admin.employ.create_employ',compact('data'));
}

public function create_employ_user(Request $request,$id)
{
    $data = User::find($id);

    $data->id = $request->id;
    $data->name = $request->name;
    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->address = $request->address;
    $data->usertype = $request->usertype;
    $data->profile_photo_path = $request->profile_photo_path;
    if($request->file('profile_photo_path'))
    {
        $file= $request->file('profile_photo_path');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('EmployImage'), $filename);
        $data['profile_photo_path']= $filename;
    }
    $data->save();
    return redirect()->back()->with('message','Employ Added Successfully.');

}
public function listEmploy()
{
    $data = User::where('usertype', '=', 2)->get();

    return view('admin.employ.listEmploy',compact('data'));
}
public function delete_employ($id)
{
    $data = User::find($id);
    $data->delete();
    return redirect()->back();
}
public function edit_employ($id)
{
    $data = User::find($id);
    return view('admin.employ.edit_employ',compact('data'));
}
public function edit_employ_user(Request $request,$id)
{
    $data = User::find($id);

    $data->id = $request->id;
    $data->name = $request->name;
    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->address = $request->address;
    $data->usertype = $request->usertype;
    $data->profile_photo_path = $request->profile_photo_path;
    if($request->file('profile_photo_path'))
    {
        $file= $request->file('profile_photo_path');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('EmployImage'), $filename);
        $data['profile_photo_path']= $filename;
    }
    $data->save();
    return redirect()->back()->with('message','Employ Added Successfully.');
}

//User
public function user_view()
{
    $data = Application::orderBy('id', 'DESC')->get();
    return view('admin.user.user_view',compact('data'));
}
}


