<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateEmpRequest;
use App\Http\Requests\PassAdminRequest;

class AdminHomeController extends Controller
{
    public function index()
    {
    	return view('AdminHome.index');
    }

    public function show($id)
    {
        $empId = DB::table('employee')
            ->where('empId', $id)
            ->first();
        return view('AdminHome.profileview')
            ->with('empId', $empId);
    }

    public function edit($id)
    {
        $empId = DB::table('employee')
            ->where('empId', $id)
            ->first();
        return view('AdminHome.editprofile')
            ->with('empId', $empId);
    }

    public function update(Request $request)
    {
        
        $params = [
            'firstName' => $request->fname,
            'lastName' => $request->lname,
            'email' => $request->email,
            'phone' => $request->mobile,
            'address' => $request->address,
            'city' => $request->division

        ];

        DB::table('employee')
            ->where('empId', $request->aid)
            ->update($params);

        return redirect('/AdminHome');
    }

    public function userreq()
    {
        $userlist = DB::table('users')
                    ->get();
        return view('AdminHome.newuserreq')
        ->with('userlist', $userlist);
    }
    public function bookingreq()
    {
        $bknglist = DB::table('bookinginfo')
                    ->get();
        return view('AdminHome.newbookingreq')
        ->with('bknglist', $bknglist);
    }

    public function usersearch()
    {
        $userlist = DB::table('users')
                    ->get();
        return view('AdminHome.usersearch')
        ->with('userlist', $userlist);
    }

    public function allbookings()
    {
        $bknglist = DB::table('bookinginfo')
                    ->get();
        return view('AdminHome.allbookings')
        ->with('bknglist', $bknglist);
    }

    public function empsearch()
    {
        $emplist = DB::table('employee')
                    ->get();
        return view('AdminHome.employeesearch')
        ->with('emplist', $emplist);
    }

     public function usershow($id)
    {
        $userId = DB::table('users')
            ->where('userId', $id)
            ->first();
        return view('AdminHome.details')
            ->with('userId', $userId);
    }

    public function usereditshow($id)
    {
        $userId = DB::table('users')
            ->where('userId', $id)
            ->first();
        return view('AdminHome.edit')
            ->with('userId', $userId);
    }

    public function userdeleteshow($id)
    {
        $userId = DB::table('users')
            ->where('userId', $id)
            ->first();
        return view('AdminHome.delete')
            ->with('userId', $userId);
    }

    public function userupdate(Request $request)
    {
        
        $params = [
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'division' => $request->division,
            'city' => $request->city,
            'dob' => $request->dob,
            'userStatus' => $request->userStatus,
            'userType' => $request->userType,
            'role' => $request->role

        ];

        DB::table('users')
            ->where('userId', $request->id)
            ->update($params);

            $userId = DB::table('users')
            ->where('userId', $request->id)
            ->first();
            if($userId->userStatus =="active")
            {
                $loginId = DB::table('login')
                ->where('userName', $request->uname)
                ->first();
                if($loginId == null)
                {
                     $params1 = [
                        'userId' => $request->id,
                        'userName' => $request->uname,
                        'password' => $request->pass,
                        'type' => $request->role
                    ];
                    DB::table('login')
                    ->insert($params1);
                }
            }
            if($userId->userStatus =="pending" || $userId->userStatus =="blocked")
            {
                $loginId = DB::table('login')
                ->where('userName', $request->uname)
                ->first();
                if($loginId != null)
                {
                     DB::table('login')
                        ->where('userName', $request->uname)
                        ->delete();
                }
            }

        return redirect('/userrequest');
    }

     public function userdelete($id)
    {
            
            $userId = DB::table('users')
                ->where('userId', $id)
                ->first();
            DB::table('login')
                ->where('userName', $userId->userName)
                ->delete();
            DB::table('users')
            ->where('userId', $id)
            ->delete();

        return redirect('/userrequest');
    }
    //employee

    public function empshow($id)
    {
        $userId = DB::table('employee')
            ->where('empId', $id)
            ->first();
        return view('AdminHome.detailsemp')
            ->with('userId', $userId);
    }

    public function empeditshow($id)
    {
        $userId = DB::table('employee')
            ->where('empId', $id)
            ->first();
        return view('AdminHome.editemp')
            ->with('userId', $userId);
    }

    public function empdeleteshow($id)
    {
        $userId = DB::table('employee')
            ->where('empId', $id)
            ->first();
        return view('AdminHome.deleteemp')
            ->with('userId', $userId);
    }

    public function empupdate(Request $request)
    {
        
        $params = [
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'dob' => $request->dob,
            'status' => $request->status,
            'role' => $request->role

        ];

        DB::table('employee')
            ->where('empId', $request->id)
            ->update($params);

            $userId = DB::table('employee')
            ->where('empId', $request->id)
            ->first();
            if($userId->status =="active")
            {
                $loginId = DB::table('login')
                ->where('userName', $request->uname)
                ->first();
                if($loginId == null)
                {
                     $params1 = [
                        'userId' => $request->id,
                        'userName' => $request->uname,
                        'password' => $request->pass,
                        'type' => $request->role
                    ];
                    DB::table('login')
                    ->insert($params1);
                }
            }
            if($userId->status =="pending" || $userId->status =="blocked")
            {
                $loginId = DB::table('login')
                ->where('userName', $request->uname)
                ->first();
                if($loginId != null)
                {
                     DB::table('login')
                        ->where('userName', $request->uname)
                        ->delete();
                }
            }

        return redirect('/employeesearch');
    }

     public function empdelete($id)
    {
            
            $userId = DB::table('employee')
                ->where('empId', $id)
                ->first();
            DB::table('login')
                ->where('userName', $userId->empName)
                ->delete();
            DB::table('employee')
            ->where('empId', $id)
            ->delete();

        return redirect('/employeesearch');
    }

    public function bookingsshow($id)
    {
        $bookId = DB::table('bookinginfo')
            ->where('bookId', $id)
            ->first();
        return view('AdminHome.detailsbooking')
            ->with('bookId', $bookId);
    }

    public function bookingseditshow($id)
    {
        $bookId = DB::table('bookinginfo')
            ->where('bookId', $id)
            ->first();
        return view('AdminHome.editbooking')
            ->with('bookId', $bookId);
    }

    public function bookingsdeleteshow($id)
    {
        $bookId = DB::table('bookinginfo')
            ->where('bookId', $id)
            ->first();
        return view('AdminHome.deletebooking')
            ->with('bookId', $bookId);
    }

    public function bookingsupdate(Request $request)
    {
        
        $params = [
            'bookingStatus' => $request->bookingStatus
        ];

        DB::table('bookinginfo')
            ->where('bookId', $request->id)
            ->update($params);
           
        return redirect('/newbookingreq');
    }

     public function bookingsdelete($id)
    {
            
            DB::table('bookinginfo')
            ->where('bookId', $id)
            ->delete();

        return redirect('/newbookingreq');
    }



    ////
    public function createEmp()
    {
        return view('AdminHome.createEmp');
    }

    public function store(CreateEmpRequest $request)
    {
        //dd($errors);
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
            'empName' => $request->empUsername,
            'password' => $request->password,
             'firstName' => $request->firstName,
             'lastName' => $request->lastName,
             'email' => $request->email,
             'sex' => $request->sex,
             'phone' => $request->phone,
             'address' => $request->address,
             'city' => $request->city,
             'photo' => $request->photo,
             'photoId' => $request->photoId,
             'lastLogin' => date('Y-m-d H:i:s'),
             'regDate' => date('Y-m-d H:i:s'),
             'dob' => $request->dob,
             'role' => $request->role,
             'status' => $request->status
        ];

        $empid = DB::table('employee')
            ->insertGetId($params);

            $emp = DB::table('employee')
            ->where('empId', $empid)
            ->first();
            if($emp->status == "active")
            {
               $params1 = [

             'userId' => $emp->empId,   
            'userName' => $emp->empName,
            'password' => $emp->password,
             'type' => $emp->role
             ]; 

                DB::table('login')
                ->insert($params1);

            }

            


        return redirect('/AdminHome');     
    }

    public function changepassword($id)
    {
        return view('AdminHome.changepassword');
    }

    public function updatepass(PassAdminRequest $request,$id)
    {
        
        $userId = DB::table('employee')
            ->where('empId', $id)
            ->first();
            $pass = $request->opass;
            if($pass ==$userId->password)
            {
                $params = [
                'password' => $request->confirmPassword
                ];
                 DB::table('employee')
                ->where('empId', $request->uid)
                ->update($params);
                DB::table('login')
                    ->where('userName', $request->uname)
                    ->update($params);

                return redirect('/AdminHome');
            }

              return redirect()->back();
       
    }

        public function changeprofilepicture($id)
    {
        return view('AdminHome.changeprofilepicture');
    }

     public function updatepic(request $request,$id)
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

                return redirect('/AdminHome');
                }

                 return redirect()->back();
                 

                //<img src="/images/{{ Session::get('user')->photo }}" class="img-responsive" alt="Image" style="width: 500px; margin: 0 auto;">
    }

            public function msgshow()
            {
                
                $msglist = DB::table('admininbox')
                    ->get();
                return view('AdminHome.message')
                ->with('msglist',$msglist);

            }

             public function msgopen($id)
            {
                
                    $msg = DB::table('admininbox')
                        ->where('id', $id)
                        ->first();
                return view('AdminHome.messageopen')
                ->with('msg',$msg);

            }
}
