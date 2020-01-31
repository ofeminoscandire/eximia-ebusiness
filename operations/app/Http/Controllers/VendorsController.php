<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;

class VendorsController extends Controller {

    public function index() {
        $vendors = \App\Vendor::all();
//        var_dump($vendors);
        return view("Vendor.index", ['vendors'=>$vendors]);
    }

    public function create() {
        return view("Vendor.create");
    }

    public function saveVendor(Request $req) {
        $message = ['message' => 'Registration was successfull.'];

        $Validator = $this->validate($req, [
            'VendorCode' => 'required|string',
            'CompanyName' => 'required|string',
            'BusinessType' => 'required|string',
            'COI' => 'required|string',
            'YOI' => 'required|string',
            'RcNumber' => 'required|string',
            'ContactPerson' => 'required|string',
            'ContactPersonTitle' => 'required|string',
            'PhoneNumber' => 'required|string',
            'Fax' => 'required|string',
            'Email' => 'required|string',
            'Website' => 'required|string',
            'MailAddress' => 'required|string',
            'StreetAddress' => 'required|string',
            'City' => 'required|string',
            'Country' => 'required|string',
            'State' => 'required|string',
            'ZipCode' => 'required|string',
            'UserEmail' => 'required|email|string',
            'password' => 'required|confirmed|min:10',
        ]);

        $vendor = new \App\Vendor();
        $vendor->VendorCode = $req->VendorCode;
        $vendor->CompanyName = strtoupper($req->CompanyName);
        $vendor->ContactPersonName = strtoupper($req->ContactPerson);
        $vendor->BusinessType = $req->BusinessType;
        $vendor->CountryOfIncoporation = $req->COI;
        $vendor->YearOfIncoporation = $req->YOI;
        $vendor->ZipCode = $req->ZipCode;
        $vendor->ContactPersonTitle = strtoupper($req->ContactPersonTitle);
        $vendor->PhoneNumber = $req->PhoneNumber;
        $vendor->FaxNumber = $req->Fax;
        $vendor->EmailAddress = strtolower($req->Email);       
        $vendor->Website = strtolower($req->Website);
        $vendor->MailingAddress = strtoupper($req->MailAddress);
        $vendor->StreetAddress = strtoupper($req->StreetAddress);
        $vendor->City = strtoupper($req->City);
        $vendor->Country = strtoupper($req->Country);


        if ($vendor->save()) {

            $member = new \App\Member();
            $member->email = strtolower($req->UserEmail);
            $member->password = bcrypt($req->password);
            $member->phone = $req->PhoneNumber;
            $member->reg_ip = \Request::ip();
            $member->account_status = 0;
            $member->dateposted = \Carbon\Carbon::now();
            $member->dateupdated = \Carbon\Carbon::now();
            $member->full_name = strtoupper($req->ContactPerson);
            $member->job_title = "";
$member->dept_no = 0;

            if ($member->save()) {
//                dd($member);
                return view('Vendor.index')->with($message);
            }
        }
        //$Resp = ['success' => 'Your action has been successfully done.'];
        return response()->json($Resp, 200);
    }

}
