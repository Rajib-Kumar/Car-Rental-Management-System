<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PublicHomeController extends Controller
{
    public function index()
    {
    	return view('PublicHome.index');
    }
    public function create()
    {
    	return view('PublicHome.create');
    }

    public function store(CreateUserRequest $request)
    {

        if ($request->hasFile('photo')) 
        {
            $image = $request->file('photo');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/public/images/');
            $image->move($destinationPath, $name);
        }
        if ($request->hasFile('photoId')) 
        {
            $image1 = $request->file('photoId');
            $name1 = time().'.'.$image1->getClientOriginalExtension();
            $destinationPath = public_path('/public/images/');
            $image1->move($destinationPath, $name1);
        }
    	$params = [
    		'userName' => $request->userName,
    		'password' => $request->password,
    		'firstName' => $request->firstName,
    		'lastName' => $request->lastName,
    		'email' => $request->email,
    		'sex' => $request->sex,
    		'phone' => $request->phone,
    		'address' => $request->address,
    		'division' => $request->division,
    		'city' => $request->city,
    		'photo' => $name,
    		'photoId' => $name1,
    		'lastLogin' => date('Y-m-d H:i:s'),
    		'regDate' => date('Y-m-d H:i:s'),
    		'dob' => $request->dob,
    		'userType' => "regular",
    		'userStatus' => "pending",
    		'role' => "user"


    	];

    	DB::table('users')
    		->insert($params);
    	return redirect('/home');
    }
    public function message(Request $request)
    {
        $dt = Carbon::now('Asia/Dhaka')->format('Y-m-d h:i');

        $params = [
            'date' => $dt,
            'msgfrom' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'message' => $request->message
        ];

        DB::table('admininbox')
            ->insert($params);

        return view('PublicHome.message')
            ->with('msg','Thank You for your valueable feedback')
            ->with('altype','alert-info')
            ->with('wdt','50%');
    }

    public function pricingIndex($id)
    {
        return view('pricing/'.$id);
    }

    
    public function at($id)
    {
        return view('pricing/air trans/at'.$id);
    }

    public function dcri($id)
    {
        return view('pricing/dcri/dcri'.$id);
    }

    public function dcro($id)
    {
        return view('pricing/dcro/dcro'.$id);
    }

    public function mcr($id)
    {
        return view('pricing/mcr/mcr'.$id);
    }

}
