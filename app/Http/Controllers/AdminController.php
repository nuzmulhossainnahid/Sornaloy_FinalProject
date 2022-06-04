<?php

namespace App\Http\Controllers;
use App\Models\Slider;

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
}
