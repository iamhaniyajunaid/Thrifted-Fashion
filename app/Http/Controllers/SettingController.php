<?php

namespace App\Http\Controllers;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
    public function show(){
        $settings=SiteSetting::all()->pluck('value','key');
        return view ('admin.settings',compact('settings'));
    }
    
    public function update(Request $request){
foreach($request->except('_token')as $key=>$value){

SiteSetting::updateOrCreate(
    ['key'=> $key],
    ['value'=> $value]

);
}
return back()->with('success','settings updated successfully.');
}

}
