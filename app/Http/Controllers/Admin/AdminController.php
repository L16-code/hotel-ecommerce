<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;
use App\Models\Hotels;
use App\Models\Activity;
use App\Models\Hotelbooking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Action;

use function Ramsey\Uuid\v1;

class AdminController extends Controller
{
    public function __construct()
    {
        if (!Auth::check())
        return redirect(route('admin.login-view'));
    }
    public function index()
    {
        return view('admin.dashboard');
    }
    public function agent()
    {
        return view('admin.agents.index');
    }
    public function villas()
    {
        return view('admin.villas.index');
    }
    public function villas_save(Request $request)
    {
        // dd($request);
        $data = new Hotels;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->role = $request->input('role');
        $data->business_name = $request->input('business_name');
        $data->country = $request->input('country');
        $data->city = $request->input('city');
        $data->country_code = $request->input('country_code');
        $data->s_address = $request->input('s_address');
        $data->a_address = $request->input('a_address');
        $data->latitude = $request->input('latitude');
        $data->longitude = $request->input('longitude');
        $data->singlemap = $request->input('singlemap');
        $data->phone = $request->input('phone');
        $data->fax = $request->input('fax');
        $data->inquiry_email = $request->input('inquiry_email');
        $data->website = $request->input('website');
        $data->facebook = $request->input('facebook');
        $data->instagram = $request->input('instagram');
        $data->twitter = $request->input('twitter');
        $data->linkedin = $request->input('linkedin');
        $data->total_rooms_suites = $request->input('total_rooms_suites');
        $data->min = $request->input('min');
        $data->max = $request->input('max');
        $data->currency = $request->input('currency');
        $data->message = $request->input('message');
        $data->select_language = $request->input('select_language');
        $data->optional_message = $request->input('optional_message');
        $data->stay = $request->input('stay');
        $data->security = $request->input('security');
        $data->staff = $request->input('staff');
        $data->housekeeping = $request->input('housekeeping');
        $data->frequency = $request->input('frequency');
        $data->front_desk = $request->input('front_desk');
        $data->bathroom = $request->input('bathroom');
        $data->agree = $request->input('agree');

        // $data['file']=$request->input('file');
        $str = "";
        foreach ($request->input('amenities') as $value) {
            $str = $str . $value . ",";
        }
        $data->amenities = $str;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('uploads/hotel/', $filename);
            $data->files = $filename;
        }
        // if($request->input('img')){
        //     $file= $request->input('file');
        //     $filename= date('YmdHi').$file->getClientOriginalExtension();
        //     $file-> move(public_path('public/Image'), $filename);
        //     $data['files']= $filename;
        //     dd($data);
        // }
        // if ($request->input('img')) {
        // $file = $request->input('img');
        // $ext = $file->getClientOriginalExtension();
        // $filename = time() . '.' . $ext;
        // $file->move(public_path('public/Hotel/Image'), $filename);
        // $destinationPath = 'images';
        // $myimage = $request->img->getClientOriginalName();
        // $data=$request->img->move(public_path($destinationPath), $myimage);
        // dd($data);
        // $student->img = $filename;
        // }
        // dd($str);
        // $data['amenities']=$request->input('amenities');
        $data->save();

        return redirect(route('villas.show'))->with('message', 'hotel added successfully');
    }
    public function villas_update(Request $request, $id)
    {
        // dd($request);
        $data = Hotels::find($id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->role = $request->input('role');
        $data->business_name = $request->input('business_name');
        $data->country = $request->input('country');
        $data->city = $request->input('city');
        $data->country_code = $request->input('country_code');
        $data->s_address = $request->input('s_address');
        $data->a_address = $request->input('a_address');
        $data->latitude = $request->input('latitude');
        $data->longitude = $request->input('longitude');
        $data->singlemap = $request->input('singlemap');
        $data->phone = $request->input('phone');
        $data->fax = $request->input('fax');
        $data->inquiry_email = $request->input('inquiry_email');
        $data->website = $request->input('website');
        $data->facebook = $request->input('facebook');
        $data->instagram = $request->input('instagram');
        $data->twitter = $request->input('twitter');
        $data->linkedin = $request->input('linkedin');
        $data->total_rooms_suites = $request->input('total_rooms_suites');
        $data->min = $request->input('min');
        $data->max = $request->input('max');
        $data->currency = $request->input('currency');
        $data->message = $request->input('message');
        $data->select_language = $request->input('select_language');
        $data->optional_message = $request->input('optional_message');
        $data->stay = $request->input('stay');
        $data->security = $request->input('security');
        $data->staff = $request->input('staff');
        $data->housekeeping = $request->input('housekeeping');
        $data->frequency = $request->input('frequency');
        $data->front_desk = $request->input('front_desk');
        $data->bathroom = $request->input('bathroom');
        $data->agree = $request->input('agree');

        // $data['file']=$request->input('file');
        $str = "";
        foreach ($request->input('amenities') as $value) {
            $str = $str . $value . ",";
        }
        $data->amenities = $str;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('uploads/hotel/', $filename);
            $data->files = $filename;
        }
        $data->update();
        return redirect(route('villas.show'))->with('message', 'hotel added successfully');
    }
    public function villas_show(Request $request)
    {


        if ($request->search) {

            $data = Hotels::where('name', 'LIKE', '%' . $request->search . '%')
                // ->orwhere('status','LIKE','%'.$request->search.'%');
                ->paginate();
            return view('admin.villas.show', ['data' => $data]);
        } else {
            // return redirect(route('villas.show'))->with('message', 'empty search');
            $data = Hotels::orderBy('id', 'desc')->paginate(2);
            return view('admin.villas.show', compact('data'));
        }
    }
    public function villas_edit($id)
    {
        // dd($id);
        $data = Hotels::find($id);
        // dd($data);
        return view('admin.villas.edit', ['show' => $data]);
    }
    public function activities_edit($id)
    {
        // dd($id);
        $data = Activity::find($id);
        // dd($data);
        return view('admin.activity.edit', ['data' => $data]);
    }
    public function activities_create()
    {
        return view('admin.activity.index');
    }
    public function activities_delete($id)
    {
        $data = Activity::find($id);
        $data->delete();
        return redirect(route('activities.show'))->with('message', 'deleted successfully');
    }
    public function villas_delete($id)
    {
        $data = Hotels::find($id);
        $data->delete();
        return redirect(route('villas.show'))->with('message', 'deleted successfully');
    }
    public function activities_save(Request $request)
    {
        // dd($request);
        $data = new Activity;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->role = $request->input('role');
        $data->place_name = $request->input('place_name');
        $data->category = $request->input('category');
        $data->country = $request->input('country');
        $data->city = $request->input('city');
        $data->country_code = $request->input('country_code');
        $data->s_address = $request->input('s_address');
        $data->a_address = $request->input('a_address');
        $data->duration = $request->input('duration');
        $data->group_size = $request->input('group_size');
        $data->tour_type = $request->input('tour_type');
        $data->date = $request->input('daterange');
        $data->age = $request->input('min_age');
        $data->pickup = $request->input('pickup');
        $data->message = $request->input('message');
        $data->included = $request->input('included');
        $data->not_included = $request->input('not_included');
        $data->latitude = $request->input('latitude');
        $data->longitude = $request->input('longitude');
        // $data->singlemap=$request->input('singlemap');
        $data->phone = $request->input('phone');
        $data->fax = $request->input('fax');
        $data->inquiry_email = $request->input('inquiry_email');
        $data->website = $request->input('website');
        $data->facebook = $request->input('facebook');
        $data->instagram = $request->input('instagram');
        $data->twitter = $request->input('twitter');
        $data->linkedin = $request->input('linkedin');
        // $data->total_rooms_suites=$request->input('total_rooms_suites');
        if ($request->monday == 'on') {
            $data->monday = '24';
        } else {
            $data->monday = $request->input('monday');
        }
        if ($request->tuesday == 'on') {
            $data->tuesday = '24';
        } else {
            $data->tuesday = $request->input('tuesday');
        }
        if ($request->wednesday == 'on') {
            $data->wednesday = '24';
        } else {
            $data->wednesday = $request->input('wednesday');
        }
        if ($request->thursday == 'on') {
            $data->thursday = '24';
        } else {
            $data->thursday = $request->input('thursday');
        }
        if ($request->friday == 'on') {
            $data->friday = '24';
        } else {
            $data->friday = $request->input('friday');
        }
        if ($request->saturday == 'on') {
            $data->saturday = '24';
        } else {
            $data->saturday = $request->input('saturday');
        }
        if ($request->sunday == 'on') {
            $data->sunday = '24';
        } else {
            $data->sunday = $request->input('sunday');
        }

        // $data->tuesday=$request->input('tuesday');
        // $data->wednesday=$request->input('wednesday');
        // $data->tuesday=$request->input('tuesday');
        // $data->thursday=$request->input('thursday');
        // $data->friday=$request->input('friday');
        $data->saturday = $request->input('saturday');
        $data->sunday = $request->input('sunday');

        $data->Itinerary = $request->input('Itinerary');
        $data->description = $request->input('description');

        $data->agree = $request->input('agree');
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/activity/', $filename);
            $data->file = $filename;
        }
        // dd($data);
        $data->save();
        return redirect(route('activities.show'));
    }
    public function activities_update(Request $request,$id)
    {
        // dd($request);
        $data =Activity::find($id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->role = $request->input('role');
        $data->place_name = $request->input('place_name');
        $data->category = $request->input('category');
        $data->country = $request->input('country');
        $data->city = $request->input('city');
        $data->country_code = $request->input('country_code');
        $data->s_address = $request->input('s_address');
        $data->a_address = $request->input('a_address');
        $data->duration = $request->input('duration');
        $data->group_size = $request->input('group_size');
        $data->tour_type = $request->input('tour_type');
        $data->date = $request->input('daterange');
        $data->age = $request->input('min_age');
        $data->pickup = $request->input('pickup');
        $data->message = $request->input('message');
        $data->included = $request->input('included');
        $data->not_included = $request->input('not_included');
        $data->latitude = $request->input('latitude');
        $data->longitude = $request->input('longitude');
        // $data->singlemap=$request->input('singlemap');
        $data->phone = $request->input('phone');
        $data->fax = $request->input('fax');
        $data->inquiry_email = $request->input('inquiry_email');
        $data->website = $request->input('website');
        $data->facebook = $request->input('facebook');
        $data->instagram = $request->input('instagram');
        $data->twitter = $request->input('twitter');
        $data->linkedin = $request->input('linkedin');
        // $data->total_rooms_suites=$request->input('total_rooms_suites');
        if ($request->monday == 'on') {
            $data->monday = '24';
        } else {
            $data->monday = $request->input('monday');
        }
        if ($request->tuesday == 'on') {
            $data->tuesday = '24';
        } else {
            $data->tuesday = $request->input('tuesday');
        }
        if ($request->wednesday == 'on') {
            $data->wednesday = '24';
        } else {
            $data->wednesday = $request->input('wednesday');
        }
        if ($request->thursday == 'on') {
            $data->thursday = '24';
        } else {
            $data->thursday = $request->input('thursday');
        }
        if ($request->friday == 'on') {
            $data->friday = '24';
        } else {
            $data->friday = $request->input('friday');
        }
        if ($request->saturday == 'on') {
            $data->saturday = '24';
        } else {
            $data->saturday = $request->input('saturday');
        }
        if ($request->sunday == 'on') {
            $data->sunday = '24';
        } else {
            $data->sunday = $request->input('sunday');
        }

        // $data->tuesday=$request->input('tuesday');
        // $data->wednesday=$request->input('wednesday');
        // $data->tuesday=$request->input('tuesday');
        // $data->thursday=$request->input('thursday');
        // $data->friday=$request->input('friday');
        $data->saturday = $request->input('saturday');
        $data->sunday = $request->input('sunday');

        $data->Itinerary = $request->input('Itinerary');
        $data->description = $request->input('description');

        $data->agree = $request->input('agree');
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('uploads/activity/', $filename);
            $data->file = $filename;
        }
        // dd($data);
        $data->update();
        return redirect(route('activities.show'));
    }

    public function activities_show(Request $request)
    {
        if ($request->search) {

            $data = Activity::where('name', 'LIKE', '%' . $request->search . '%')
                // ->orwhere('status','LIKE','%'.$request->search.'%');
                ->paginate();
            return view('admin.activity.show', ['data' => $data]);
        } else {
            // return redirect(route('villas.show'))->with('message', 'empty search');
            $data = Activity::orderBy('id', 'desc')->paginate(2);
            return view('admin.activity.show', compact('data'));
        }
        // $data= Activity::get();
        // return view('admin.activities.show',compact('data'));
    }
    public function hotel_booking()
    {
        $data = Hotelbooking::select('hotelbooking.*', 'hotels.name as hotel_name')
            ->join('hotels', 'hotels.id', '=', 'hotelbooking.hid')
            // ->where('hotelbooking.hid','=','hotels.id')
            ->orderBy('id', 'desc')->paginate(10);
        // $x=$data->adults;
        // $y=$data->children;
        // $z=$data->infants;
        // $add=$x+$y+$z;
        // $data=$data->paginate(1);
        // dd($data);
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // die();
        return view('admin.booking.hotelbooking', ['data' => $data]);
    }
    public function villas_view($id)
    {
        $data = Hotels::find($id);
        return view('admin.villas.view', compact('data'));
    }
    public function activities_view($id)
    {
        $data = Activity::find($id);
        return view('admin.activity.view', compact('data'));
    }
}
