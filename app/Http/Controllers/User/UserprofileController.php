<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserprofileController extends Controller
{
    public function user_dashboard(){
        // dd(Auth::user()->id);
        $id=Auth::user()->id;
        $data= User::find($id);
        return view('user.dashboard.dashboard',compact('data'));
    }
    public function user_profile(){
        // dd(Auth::user()->id);
        $id=Auth::user()->id;
        $data= User::find($id);
        return view('user.dashboard.profile.index',compact('data'));
    }
    public function user_profile_edit(){
        $id=Auth::user()->id;
        $data= User::find($id);
        return view('user.dashboard.profile.edit',compact('data'));
    }
    public function user_profile_edit_data(Request $request){
        // dd($request);
        $id=Auth::user()->id;
        $data= User::find($id);
        $data->username=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->dob=$request->dob;
        $data->address=$request->address;
        $data->save();
        return redirect()->back();
    }
    public function user_profile_edit_password(Request $request){
        // dd($request);
        $id=Auth::user()->id;
        $data= User::find($id);
        $data->password=bcrypt($request->new_password);
        // $data->r_password=$request->new_password;
        // $data->email=$request->email;
        // $data->phone=$request->phone;
        // $data->dob=$request->dob;
        // $data->address=$request->address;
        $data->save();
        return redirect()->back();
    }

}
