<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index(Request $request) {
        $no = 1;
        $data_user = User::all();

        return view('master\user\list_master_user_view', ['data_user' => $data_user, 'no' => $no]);
    }

    public function create() {
        return view('master\user\cerate_master_user_view');
    }

    public function store(Request $request) {
        $user             = new User();
        $user->username   = $request->username;
        $user->fullname   = $request->fullname;
        $user->position   = $request->position;
        $user->phone      = $request->phone;
        $user->address    = $request->address;
        $user->date       = $request->date;
        $user->password   = bcrypt($request->password);
        $user->created_by = Auth::user()->fullname;
        $user->save();
        Alert::success('Success', 'Data has been inserted.')->showConfirmButton('OK');
        return redirect('/master/create-master-user');
    }

    public function destroy($id) {
        $user = User::find($id);
        $user->delete();
        Alert::success('Success', 'Data has been deleted.')->showConfirmButton('OK');
        return redirect('/master/list-master-user');
    }

    public function edit($id) {
        $data = User::find($id);
        return view('master\user\edit_master_user_view', ['data' => $data]);
    }

    public function update(Request $request) {
        $user = User::find($request->id);
        $user->username   = $request->username;
        if ($request->password != null) {
            $user->password   = bcrypt($request->password);
        }
        $user->fullname   = $request->fullname;
        $user->position   = $request->position;
        $user->phone      = $request->phone;
        $user->address    = $request->address;
        $user->date       = $request->date;
        $user->updated_by = Auth::user()->fullname;
        $user->save();
        Alert::success('Success', 'Data has been updated.')->showConfirmButton('OK');
        return redirect('/master/list-master-user');
    }
}
