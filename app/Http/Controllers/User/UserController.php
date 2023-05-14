<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Hotels;
use App\Models\Activity;
use App\Models\Activitybooking;
use App\Models\Hotelbooking;
use Illuminate\Support\Facades\Auth;
use Session;
class UserController extends Controller
{
    public function user(){
        return view('user.dashboard');
    }

    public function userregister()
    {
        return view('user.login.register');
        // dd($request);

        // return route('user.login')->with('message','successfully registered');
        // return view('auth.login', ['route' => route('admin.login-view'), 'title' => 'Admin']);
    }
    public function register_save(Request $request){
        $data=new User;
        $data->username=$request->username;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->r_password=$request->r_password;
        $data->save();
        return redirect(route('user.login'))->with('message','successfully registered');
        // return view('user.login.login');
    }
    public function login_save(Request $request){
        // dd($request);
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);
        $credentials=$request->only('username', 'password');
        if(Auth::attempt($credentials)){
            return redirect(route('user.home'));
        }
        else{
            dd('hello, you are already logged in');
        }
        // return view('user.login.login');
    }
    public function userlogin(){
        return view('user.login.login');
    }
    public function userlogout(){
        Session::flush();
        Auth::logout();
        return redirect(route('user.home'));
    }
    public function hotel_list(){
        $data=Hotels::get();
        return view('user.hotel.hotellist',compact('data'));
    }
    public function hotel_single($id){
        $data=Hotels::find($id);
        // dd($data);
        return view('user.hotel.singlehotel',compact('data'));
    }
    public function hotel_data($id){
        // dd($_GET);
        foreach($_GET as  $value)
        {
            // echo 'Key = ' . $key . '<br />';
            $data[]=$value;
        }
        // $hotel=$id;
        // $data=$_GET;
        request()->session()->put('originalQuantity',$data);
        // $data=$_GET;
        // $this->hotel_booking($id);
            return redirect(route('user.hotel.booking',$id));
            // return route('user.hotel.booking');
    }
    public function hotel_booking($id){
        // dd($hotel)\;
        $data =request()->session()->get('originalQuantity');
        $hotel_book= Hotels::find($id);
        // dd($data);
        return view('user.hotel.hotelbooking',compact('hotel_book','data'));
    }
    public function hotel_booking_save(Request $request, $id){
        // $data=Activity::find($id
        // dd($request);
        $extra =request()->session()->get('originalQuantity');
        $data=new Hotelbooking;
        $data->first_name=$request->fname;
        $data->last_name=$request->lname;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->country=$request->country;
        $data->country_code=$request->country_code;
        $data->status='0';
        $data->adults=$extra[3];
        $data->rooms=$extra[2];
        $data->children=$extra[4];
        $data->infants=$extra[5];
        $data->from_to=$extra[1];
        $data->hid=$id;
        $data->uid=Auth::user()->id;
        $data->save();
        return redirect(route('user.hotel.list'));

    }
    public function activity_list(){
        $data=Activity::get();
        // dd($data);
        return view('user.activity.activitylist',compact('data'));
    }
    public function activity_single($id){
        $data=Activity::find($id);
        // dd($data);
        return view('user.activity.singleactivity',compact('data'));
    }
    public function activity_data($id){

        foreach($_GET as  $value)
        {
            // echo 'Key = ' . $key . '<br />';
            $data[]=$value;
        }
        request()->session()->put('formdata',$data);
        // $activity=$id;
        // $data=$_GET;
        // $this->activity_booking($data,$activity);
            return redirect(route('user.activity.booking',$id));
    }
    public function activity_booking($id){
        $data =request()->session()->get('formdata');
        // dd($data);
        $activity_book= Activity::find($id);
        return view('user.activity.activitybooking',compact('activity_book','data'));
    }
    public function activity_booking_save(Request $request, $id){
        // $data=Activity::find($id
        // dd($request);
        $extra =request()->session()->get('formdata');
        $data=new Activitybooking;
        $data->first_name=$request->fname;
        $data->last_name=$request->lname;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->country=$request->country;
        $data->country_code=$request->country_code;
        $data->status='0';
        $data->adults=$extra[3];
        // $data->rooms=$extra[2];
        $data->children=$extra[4];
        $data->infants=$extra[2];
        $data->from_to=$extra[1];
        $data->aid=$id;
        $data->save();
        return redirect(route('user.activity.list'));

    }

}
