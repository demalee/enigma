@extends('layouts.client_dash')
@section('content')

    <!--/ menu  -->
    <div class="main_content_iner ">
        <div class="container-fluid p-0 ">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30 QA_section">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Suppliers</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                          <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                            <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="QA_table table-responsive ">
                                <!-- table-responsive -->
                                <table class="table pt-0">
                                    <thead>
                                    <tr>
                                        <th scope="col">#ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Organization Code</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Comment</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($suppliers as $supplier)
                                        <tr>
                                            <td>{{$supplier->id}}</td>
                                            <td class="nowrap">{{$supplier->name}}</td>
                                            <td class="nowrap" >{{$supplier->code}}</td>
                                            <td>{{$supplier->phone}}</td>
                                            <td>{{$supplier->message}}</td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30 QA_section">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Employees</h3>
                                </div>
                                <div class="header_more_tool">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown">
                                          <i class="ti-more-alt"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#"> <i class="ti-eye"></i> Action</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-trash"></i> Delete</a>
                                            <a class="dropdown-item" href="#"> <i class="fas fa-edit"></i> Edit</a>
                                            <a class="dropdown-item" href="#"> <i class="ti-printer"></i> Print</a>
                                            <a class="dropdown-item" href="#"> <i class="fa fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="QA_table table-responsive ">
                                <!-- table-responsive -->
                                <table class="table pt-0">
                                    <thead>
                                    <tr>
                                        <th scope="col">#ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Organization Code</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Comment</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($employees as $employee)
                                        <tr>
                                            <td>{{$employee->id}}</td>
                                            <td class="nowrap">{{$employee->name}}</td>
                                            <td class="nowrap" >{{$employee->code}}</td>
                                            <td>{{$employee->phone}}</td>
                                            <td>{{$employee->message}}</td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
