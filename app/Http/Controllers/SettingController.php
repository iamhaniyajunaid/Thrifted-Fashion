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
    
}
