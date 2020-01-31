@extends('Layouts.MasterLayout')
@section('pageTitle', 'Create Vendor')

@section('content')
<div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">Vendor's Registration</h4>
    <p class="mg-b-0">
        <strong>DISCLAIMER:</strong> Completion of this form, and registration in the database, does not imply that a
        supplier/contractor is approved by Eximia Realty Limited as a supplier/contractor, nor does it indicate that
        a supplier/contractor is included on any tender list for the supply of goods or services for which
        it has registered.
        <br />
        <strong>WARRANTY:</strong> Contractors/Suppliers warrant that they have the experience, capacity,
        registration and license to perform the proposed contract/service.
        <br />
        <strong>Suppliers/Contractors</strong> should please note that only verifiable information should be provided as
        information provided shall be subject to a verification process and all proposals shall be subject
        to a bidding process.
    </p>
</div><!-- d-flex -->

@include('Layouts.Notification')

<div class=".br-pagebody">
    <div class="br-section-wrapper">
        <form name="form" id="form-data" data-route="{{route('CreateVendor')}}" method="POST">
            @csrf
            <div class="form-layout form-layout-6 mg-b-40">

                <div class="row no-gutters">
                    <div class="col-sm-12 ml-0 pl-0" style="background-color:#FFF; border-left:none">
                        <span class="title">Fields marked <span class="tx-danger">*</span> are important!</span>
                    </div><!-- col-8 -->
                </div><!-- row -->

                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">
                        Vendor Code: <span class="tx-danger">*</span>
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-9">
                        <input id="VendorCode" name="VendorCode" style="background:none" class="form-control" type="text" value="OA47629289" readonly="">
                    </div><!-- col-8 -->
                </div><!-- row -->

                <div class="row no-gutters">
                    <div class="col-sm-12" style="background-color:#FFF; border-left:none">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-sm-12" style="background-color:#FFF; border-left:none">
                        <h4>Company Information</h4>
                    </div><!-- col-8 -->
                </div><!-- row -->

                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">
                        Company Name: <span class="tx-danger">*</span>
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-9">
                        <input class="form-control" type="text" id="CompanyName" name="CompanyName" value="{{old('CompanyName')}}" >

                    </div><!-- col-8 -->
                </div><!-- row -->

                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">
                        Type Of Business: <span class="tx-danger">*</span>
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-9">
                        <select class="form-control select2" id="BusinessType" name="BusinessType" tabindex="-1" aria-hidden="true">
                            <option value="">-- Select --</option>
                            <option value="Construction">Construction</option>
                            <option value="Fabricator">Fabricator</option>
                            <option value="Manufacturer">Manufacturer</option>
                            <option value="Chief">Chief</option>
                            <option value="Service Provider">Service Provider</option>
                        </select>
                    </div><!-- col-8 -->
                </div><!-- row -->

                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">
                        Country Of Incorporation: <span class="tx-danger">*</span>
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-9">
                        <input class="form-control" type="text" id="COI" name="COI" value="{{old('COI')}}">
                    </div><!-- col-8 -->
                </div><!-- row -->

                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">
                        Year Of Incorporation: <span class="tx-danger">*</span>
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-9">
                        <input class="form-control" type="text" id="YOI" name="YOI" value="{{old('YOI')}}">
                    </div><!-- col-8 -->
                </div><!-- row -->

                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">RC Number: <span class="tx-danger">*</span>
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-9">
                        <input class="form-control" type="text" id="RcNumber" name="RcNumber" value="{{old('RcNumber')}}">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-sm-12" style="background-color:#FFF; border-left:none">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-sm-12" style="background-color:#FFF; border-left:none">
                        <h4>Contact Information</h4>
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">Contact Person Name: <span class="tx-danger">*</span>
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-9">
                        <input class="form-control" type="text" id="ContactPerson" name="ContactPerson" value="{{old('ContactPerson')}}">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">Contact Person Title/Position: <span class="tx-danger">*</span>
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-9">
                        <input class="form-control" type="text" id="ContactPersonTitle" name="ContactPersonTitle" value="{{old('ContactPersonTitle')}}">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">Phone Number: <span class="tx-danger">*</span>
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-9">
                        <input class="form-control" type="text" id="PhoneNumber" name="PhoneNumber" value="{{old('PhoneNumber')}}">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">
                        Fax Number: <span class="tx-danger">*</span>
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-9">
                        <input class="form-control" type="text" id="Fax" name="Fax" value="{{old('Fax')}}">
                    </div><!-- col-8 -->
                </div><!-- row -->

                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">
                        Email Address: <span class="tx-danger">*</span>
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-9">
                        <input class="form-control" type="email" id="Email" name="Email" value="{{old('Email')}}">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">Website: <span class="tx-danger">*</span>
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-9">
                        <input class="form-control" type="url" id="Website" name="Website" value="{{old('Website')}}">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">Mailing Address: <span class="tx-danger">*</span>
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-9">
                        <input class="form-control" type="text" id="MailAddress" name="MailAddress" value="{{old('MailAddress')}}">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">Street Address: <span class="tx-danger">*</span>
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-9">
                        <input class="form-control" type="text" id="StreetAddress" name="StreetAddress" value="{{old('StreetAddress')}}">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">City: <span class="tx-danger">*</span>
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-9">
                        <input class="form-control" type="text" id="City" name="City" value="{{old('City')}}">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">Country: <span class="tx-danger">*</span>
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-9">
                        <input class="form-control" type="text" id="Country" name="Country" value="{{old('Country')}}">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">State/Province: <span class="tx-danger">*</span>
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-9">
                        <input class="form-control" type="text" id="State" name="State" value="{{old('State')}}">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">Postal/ZIP Code: <span class="tx-danger">*</span>
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-9">
                        <input class="form-control" type="text" id="ZipCode" name="ZipCode" value="{{old('ZipCode')}}">
                    </div><!-- col-8 -->
                </div><!-- row -->

                <div class="row no-gutters">
                    <div class="col-sm-12" style="background-color:#FFF; border-left:none">
                    </div><!-- col-8 -->
                </div><!-- row -->

                
                <div class="row no-gutters">
                    <div class="col-sm-12" style="background-color:#FFF; border-left:none">
                        <h4>Signup Details</h4>
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">Enter Email: <span class="tx-danger">*</span>
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-9">
                        <input class="form-control" type="email" id="UserEmail" name="UserEmail" value="{{old('UserEmail')}}">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">Enter Password: <span class="tx-danger">*</span>
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-9">
                        <input class="form-control" type="password" id="password" name="password">
                    </div><!-- col-8 -->
                </div><!-- row -->
                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">Confirm Password: <span class="tx-danger">*</span>
                    </div><!-- col-4 -->
                    <div class="col-7 col-sm-9">
                        <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" >
                    </div><!-- col-8 -->
                </div><!-- row -->

                <div class="row no-gutters">
                    <div class="col-5 col-sm-3">
                        &nbsp;
                    </div><!-- col-4 -->
                    <div class="form-layout-footer col-7 col-sm-9 bd pd-20 bd-t-0">
                        <input class="btn btn-primary pull-right" id="btnSubmit" type="submit" style="cursor:pointer" value="Register Vendor">
                    </div><!-- col-8 -->
                </div><!-- row -->

            </div><!-- form-layout -->
        </form>
        <div id="message"></div>
    </div>
</div>

@endsection

@section('page-script')
<script type="text/javascript" src="{{asset('myjs/vendor.js')}}"></script>
@stop
