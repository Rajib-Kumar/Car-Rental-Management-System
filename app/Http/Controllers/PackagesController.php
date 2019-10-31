<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackagesController extends Controller
{
    public function index()
    {
        return view('pricinguser.packages');
    }
    public function pricingIndex($id)
    {
        return view('pricinguser/'.$id);
    }

    
    public function at($id)
    {
        return view('pricinguser/air trans/at'.$id);
    }

    public function dcri($id)
    {
        return view('pricinguser/dcri/dcri'.$id);
    }

    public function dcro($id)
    {
        return view('pricinguser/dcro/dcro'.$id);
    }

    public function mcr($id)
    {
        return view('pricinguser/mcr/mcr'.$id);
    }
    
    public function indexadmin()
    {
        return view('pricingadmin.packages');
    }
    public function pricingIndexadmin($id)
    {
        return view('pricingadmin/'.$id);
    }

    
    public function atadmin($id)
    {
        return view('pricingadmin/air trans/at'.$id);
    }

    public function dcriadmin($id)
    {
        return view('pricingadmin/dcri/dcri'.$id);
    }

    public function dcroadmin($id)
    {
        return view('pricingadmin/dcro/dcro'.$id);
    }

    public function mcradmin($id)
    {
        return view('pricingadmin/mcr/mcr'.$id);
    }

    public function indexview()
    {
        $pcklist = DB::table('packages')
            ->get();
        return view('packageEdit.packageview')
            ->with('pcklist', $pcklist);
    }

    public function edit($id)
    {
        $pcklist = DB::table('packages')
            ->where('packageId', $id)
            ->first();
        return view('packageEdit.edit')
            ->with('pcklist', $pcklist);
    }

    public function update(Request $request)
    {
         
        $params = [
            'rentalType' => $request->packageName,
            'packageType' => $request->packageType,
            'vehicleType' => $request->vehicleType,
            'location' => $request->location,
            'price' => $request->price,
            'parkingCharge' => $request->parkingCharge,
            'driverCost' => $request->driverCost
        ];

        DB::table('packages')
            ->where('packageId', $request->pid)
            ->update($params);

        return redirect('/edit');
    }

    public function show($id)
    {
        $pcklist = DB::table('packages')
            ->where('packageId', $id)
            ->first();
        return view('packageEdit.details')
            ->with('pcklist', $pcklist);
    }
}
