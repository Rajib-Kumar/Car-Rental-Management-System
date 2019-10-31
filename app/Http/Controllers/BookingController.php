<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateBookingRequest;

class BookingController extends Controller
{
    public function index($id)
    {
    	$pckgId = DB::table('packages')
            ->where('packageId', $id)
            ->first();
    	return view('UserHome.booking')
    	->with('pckgId', $pckgId);

    }

    public function indexall($id)
    {
    	$bknglist = DB::table('bookinginfo')
            ->where('bookerId', $id)
            //->groupBy('bookerId')
              //  ->having('bookerId', '=', $id)
                ->get();
    	return view('UserHome.mybookings')
    	->with('bknglist', $bknglist);

    }

    public function show($id)
    {
        $bkngId = DB::table('bookinginfo')
            ->where('bookId', $id)
            ->first();
        return view('UserHome.bookinginfoshow')
            ->with('bkngId', $bkngId);
    }

    public function edit($id)
    {
        $bkngId = DB::table('bookinginfo')
            ->where('bookId', $id)
            ->first();
        return view('UserHome.bookinginfoedit')
            ->with('bkngId', $bkngId);
    }

    public function store(CreateBookingRequest $request)
    {
    	$pending ="pending";
    	$params = [

    		'bookerId' => $request->uuid,
            'rentalType' => $request->rentalType,
            'packageType' => $request->packageType,
            'vehicleType' => $request->vehicleType,
            'price' => $request->price,
            'StartDateTime' => $request->StartDateTime,
            'EndDateTime' => $request->EndDateTime,
            'StartLocation' => $request->StartLocation,
            'ReturnLocation' => $request->ReturnLocation,
            'packageId' => $request->packageId,
            'bookingStatus' => $pending,
            'payingstatus' => $pending

    	];

    	$id = DB::table('bookinginfo')
    		->insertGetId($params);

    		$pckgId = DB::table('packages')
            ->where('packageId', $request->packageId)
            ->first();
            $bkngId = DB::table('bookinginfo')
            ->where('bookId', $id)
            ->first();
            $userId = DB::table('users')
            ->where('userId', $request->uuid)
            ->first();

    	return view('UserHome.bookinginfo')
    		->with('pckgId', $pckgId)
    		->with('bkngId', $bkngId)
    		->with('userId', $userId);

    }

    public function updateToCancel(Request $request)
    {
        $status="cancelled";
        $params = [
            'bookingStatus' => $status

        ];

        DB::table('bookinginfo')
            ->where('bookId', $request->bid)
            ->update($params);

            $bkngId = DB::table('bookinginfo')
            ->where('bookId', $request->bid)
            ->first();
            $pckgId = DB::table('packages')
            ->where('packageId', $request->packageId)
            ->first();
            $userId = DB::table('users')
            ->where('userId', $request->uuid)
            ->first();

        return view('UserHome.bookinginfoCancel')
        	->with('pckgId', $pckgId)
    		->with('bkngId', $bkngId)
    		->with('userId', $userId);
    }
    public function update(Request $request)
    {
        
        $params = [
            'StartDateTime' => $request->StartDateTime,
            'EndDateTime' => $request->EndDateTime,
            'StartLocation' => $request->StartLocation,
            'ReturnLocation' => $request->ReturnLocation

        ];

        DB::table('bookinginfo')
            ->where('bookId', $request->bid)
            ->update($params);

            $bkngId = DB::table('bookinginfo')
            ->where('bookId', $request->bid)
            ->first();

        return view('UserHome.bookinginfoshow')
    		->with('bkngId', $bkngId);
    }
}
