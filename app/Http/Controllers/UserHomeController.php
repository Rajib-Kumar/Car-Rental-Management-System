<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\PassUserRequest;
use App\Http\Requests\PicUserRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserHomeController extends Controller
{
    public function index()
    {
        return view('UserHome.index');
    }

    public function show($id)
    {
        $userId = DB::table('users')
            ->where('userId', $id)
            ->first();
        return view('UserHome.profileview')
            ->with('userId', $userId);
    }

    public function edit($id)
    {
        $userId = DB::table('users')
            ->where('userId', $id)
            ->first();
        return view('UserHome.editprofile')
            ->with('userId', $userId);
    }

    public function update(EditUserRequest $request)
    {
         
        $params = [
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'division' => $request->division,
            'city' => $request->city
        ];

        DB::table('users')
            ->where('userId', $request->uid)
            ->update($params);

        return redirect('/UserHome');
    }

    public function changeprofilepicture($id)
    {
        return view('UserHome.changeprofilepicture');
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

        return view('UserHome.message')
            ->with('msg','Thank You for your valueable feedback')
            ->with('altype','alert-info')
            ->with('wdt','50%');
    }

    public function changepassword($id)
    {
        return view('UserHome.changepassword');
    }

    public function updatepass(PassUserRequest $request,$id)
    {
        
        $userId = DB::table('users')
            ->where('userId', $id)
            ->first();
            $pass = $request->opass;
            if($pass ==$userId->password)
            {
                $params = [
                'password' => $request->confirmPassword
                ];
                 DB::table('users')
                ->where('userId', $request->uid)
                ->update($params);
                DB::table('login')
                    ->where('userName', $request->uname)
                    ->update($params);

                return redirect('/UserHome');
            }

              return redirect()->back();
       
    }

    public function updatepic(PicUserRequest $request,$id)
    {       
               $name;
               if ($request->hasFile('photo')) 
                {
                    $image = $request->file('photo');
                    $name = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/images');
                   $image->move($destinationPath, $name);
                   $this->save();
                   // $path = $request->file('photo')->store('images');
                   $params = [
                'photo' => $name
                ];
                DB::table('users')
                ->where('userId', $request->uid)
                ->update($params);
                DB::table('login')
                    ->where('userName', $request->uname)
                    ->update($params);

                return redirect('/UserHome');
                }

                 return redirect()->back();
                 

                //<img src="/images/{{ Session::get('user')->photo }}" class="img-responsive" alt="Image" style="width: 500px; margin: 0 auto;">
    }


}
