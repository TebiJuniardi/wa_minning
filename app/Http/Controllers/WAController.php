<?php

namespace App\Http\Controllers;

use App\Models\WAModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class WAController extends Controller
{
    public function index(Request $request) {
        $no = 1;
        $data_wa = WAModel::all();

        return view('master\wa\list_master_wa_view', ['data_wa' => $data_wa, 'no' => $no]);
    }

    public function create() {
        return view('master\wa\cerate_master_wa_view');
    }

    public function store(Request $request) {
        $wa             = new WAModel();
        $wa->name       = $request->name;
        $wa->port       = $request->port;
        $wa->ip         = $request->ip;
        $wa->created_by = Auth::user()->fullname;
        $wa->save();
        Alert::success('Success', 'Data has been inserted.')->showConfirmButton('OK');
        return redirect('/master/create-master-wa');
    }

    public function destroy($id) {
        $wa = WAModel::find($id);
        $wa->delete();
        Alert::success('Success', 'Data has been deleted.')->showConfirmButton('OK');
        return redirect('/master/list-master-wa');
    }

    public function edit($id) {
        $data = WAModel::find($id);
        return view('master\wa\edit_master_wa_view', ['data' => $data]);
    }

    public function update(Request $request) {
        $wa = WAModel::find($request->id);
        $wa->name       = $request->name;
        $wa->port       = $request->port;
        $wa->ip         = $request->ip;
        $wa->updated_by = Auth::user()->fullname;
        $wa->save();
        Alert::success('Success', 'Data has been updated.')->showConfirmButton('OK');
        return redirect('/master/list-master-wa');
    }
}
