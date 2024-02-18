<?php

namespace App\Http\Controllers;

use App\Models\SetingModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SettingController extends Controller
{
    public function index()
    {
        $setting = SetingModel::find(1);
        return view('setting\setting_view', compact('setting'));
    }

    public function update(Request $request)
    {
        $seting = SetingModel::find(1);
        $seting->start_delay_minning = $request->start_delay_minning;
        $seting->finish_delay_minning = $request->finish_delay_minning;
        $seting->grouping = $request->grouping;
        $seting->start_delay_blash = $request->start_delay_blash;
        $seting->finish_delay_blash = $request->finish_delay_blash;
        $seting->max_group_blash = $request->max_group_blash;
        $seting->start_delay_group_blash = $request->start_delay_group_blash;
        $seting->finish_delay_group_blash = $request->finish_delay_group_blash;
        $seting->delay_blash = $request->delay_blash;
        $seting->created_by = Auth::user()->fullname;
        $seting->save();
        Alert::success('Success', 'Data has been updated.')->showConfirmButton('OK');
        return redirect('/proses/setting');
    }
}
