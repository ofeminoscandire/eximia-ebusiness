@extends('Layouts.MasterLayout') 
@section('pageTitle', 'Vendor List') 

@section('content')
<div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">Vendor's List</h4>
    <p class="mg-b-0">

    </p>
</div>
<!-- d-flex -->
<div class="br-pagebody mg-t-5 ">
    <div class="row row-sm">
        <div class="col-md-6 col-xl-3 col-sm-12">
            <a href="/vendors/create" class="btn btn-sm btn-success">Create Vendor</a>
        </div>
    </div>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper pd-10">
            <div id="datatable1_wrapper" class="no-footer">
                <table id="datatable1" class="table responsive dataTable no-footer" aria-describedby="datatable1_info"
                       style="width: 100%">
                    <thead>
                        <tr role="row">
                            <th class="wd-15p sorting_asc" tabindex="0" aria-controls="datatable1" style="" aria-sort="ascending" aria-label="Code: activate to sort column descending">
                                Code
                            </th>
                            <th class="wd-15p sorting" tabindex="0" aria-controls="datatable1" style="" aria-label="Name: activate to sort column ascending">
                                Name
                            </th>
                            <th class="wd-15p sorting" tabindex="0" aria-controls="datatable1" style="" aria-label="Business Type: activate to sort column ascending">
                                Business Type
                            </th>
                            <th class="wd-20p sorting" tabindex="0" aria-controls="datatable1" style="" aria-label="Contact Person: activate to sort column ascending">
                                Contact Title
                            </th>
                            <th class="wd-20p sorting" tabindex="0" aria-controls="datatable1" style="" aria-label="Contact Person: activate to sort column ascending">
                                Contact Person
                            </th>
                            <th class="wd-15p sorting" tabindex="0" aria-controls="datatable1" style="" aria-label="Contact Email: activate to sort column ascending">
                                Contact Email
                            </th>
                            <th class="wd-10p sorting" tabindex="0" aria-controls="datatable1" style="" aria-label="Contact Phone: activate to sort column ascending">
                                Contact Phone
                            </th>
<!--                            <th class="wd-25p sorting" tabindex="0" aria-controls="datatable1" style="" aria-label="Entry: activate to sort column ascending">
                                Website
                            </th>-->
                            <th class="wd-25p sorting" tabindex="0" aria-controls="datatable1" style="" aria-label="Entry: activate to sort column ascending">
                                Entry Date
                            </th>
                            <th style="width: 40px; display:block;" aria-label="Entry: activate to sort column ascending">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vendors as $ven)
                        <tr role="row" class="odd">
                            <td tabindex="0" class="sorting_1">{{$ven->VendorCode}}</td>
                            <td>{{$ven->CompanyName}}</td>                            
                            <td>{{$ven->BusinessType}}</td>
                            <td>{{$ven->ContactPersonTitle}}</td>
                            <td>{{$ven->ContactPersonName}}</td>
                            <td>{{$ven->EmailAddress}}</td>
                            <td>{{$ven->PhoneNumber }}</td>
                            <!--<td><a href="{{$ven->Website}}"> {{$ven->Website}}</td>td-->
                            <td>{{$ven->created_at }}</td>                            
                            <td style="width: 40px; display:block;">
                                <a class="btn btn-sm btn-success" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     <span class="icon wd-40"><i class="fa fa-navicon"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item dropdown-item2" href="#">View Details</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item dropdown-item2" href="#">Activate</a>
                                    <a class="dropdown-item dropdown-item2" href="#">Deactivate</a>
                                    <a class="dropdown-item dropdown-item2" href="#">Suspend</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item dropdown-item2" href="#">View Transactions</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item dropdown-item2" href="#">View Wallets</a>
                                </div>
                            </td>

                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        <!-- table-wrapper -->

    </div>
</div>
<!-- row -->
@endsection




@section('page-script')
<script type="text/javascript" src="{{asset('myjs/vendor.js')}}"></script>
@stop
