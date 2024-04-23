@include('layouts.header')
<body id="page-top">
    <div id="wrapper">
       @include('layouts.sidebar')
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                @include('layouts.nav')
                <div class="container-fluid" style="border: 2.5px none var(--bs-black);padding: 0px;">
                    
                    <div class="row">
                        <h3 class="text-dark mb-4">Orders</h3>
                        <div class="col-md-6 text-nowrap">
                            <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                            <option value="10" selected="">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>&nbsp;</label>
                            </div>
                        </div>
                        <div class="col-md-6 text-end" style="position: static;">
                            <select style="text-align: right;position: relative;">
                                    <option value="all" selected="">All</option>
                                    <option value="13">Stock</option>
                                    <option value="14">Popularity</option>
                                    <option value="">Black list</option>
                            </select>
                            <div class="text-md-end dataTables_filter" id="dataTable_filter" style="text-align: right;width: 240.0px;height: 40px;position: relative;display: inline-block;"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label><button class="btn btn-primary" type="button">Go</button></div>
                            </div>
                        </div>
                        <div class="table-responsive" style="position: relative;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="margin-right: 0px;">Order ID</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach($orders as $order)
                                        <td>{{$order->order_id}}</td>
                                        <td>{{$order->date}}</td>
                                        <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m{{$order->order_id}}">{{$order->status}}</button></td>
                                        <td>{{$order->total}}</td>
                                      
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                            </div>
                            <div class="col-md-6">
                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- model start -->
                        <div class="modal fade" id="m{{$order->order_id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        @endforeach   
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Category</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    
                                    <div class="modal-body">
                                        <div class="row" style="">
                                            <div class="col">
                                                <h1 style="font-size: 20px;margin: 0;height: 25px;width: 200.9px;"><strong><span style="color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);">General</span></strong><br><br></h1>
                                                <p><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">Payment via Cash on delivery. Customer IP:&nbsp;::1</span><br><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">Date created:2023.12.12 @ ‎02:35&nbsp;</span><br><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">Status:</span><span style="color: rgb(44, 51, 56); background-color: rgb(255, 255, 255);">&nbsp; </span>
                                                <form action="/updatecategory/6" method="get">
                                                    <select>                                             
                                                    <optgroup label="This is a group">
                                                            <option value="12" selected="">Pending payment</option>
                                                            <option value="13">Processing</option>
                                                            <option value="14">Completed</option>
                                                            <option value="Cancelled">Cancelled</option>
                                                            <option value="Onhold">On hold</option>
                                                            <option value="Refunded">Refunded</option>
                                                            <option value="Failed">Failed</option>
                                                    </optgroup>
                                                    </select>
                                                    <br>
                                                    <span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">Customer:</span><span style="color: rgb(44, 51, 56); background-color: rgb(255, 255, 255);">&nbsp;</span><br><span style="color: rgb(68, 68, 68); background-color: rgb(255, 255, 255);">yohanvishvajith@gmail.com</span><br><button class="btn btn-primary" type="button" style="height: 40px;width: 70px;padding: 0px;">Update</button><br></p>
                                                </form>
                                            </div>
                                        
                                        
                                            <div class="col" style="padding: 0px;">
                                                <h1 style="font-size: 20px;margin: 0;height: 25px;text-align: left;"><strong><span style="color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);">Shipping</span></strong><br><br><br><br></h1>
                                                <p><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">Mr.yohan</span><br><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">No.280,Atulgama Road,Ankelipitiya ,Thalatuoya</span><br><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">kandy</span><br><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">20200</span><br><strong><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">Phone:</span></strong><a href="tel:0703145633"><span style="color: rgb(34, 113, 177); background-color: rgb(255, 255, 255);">0703145633</span></a><br><br><br></p>
                                            </div>
                                        
                                        
                                            <div class="col">
                                                <h1 style="font-size: 20px;margin: 0;height: 25px;"><strong><span style="color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);">Billing</span></strong><br><br><br><br></h1>
                                                <p><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">Mr.yohan</span><br><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">No.280,Atulgama Road,Ankelipitiya ,Thalatuoya</span><br><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">kandy</span><br><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">20200</span><br><strong><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">Emailaddress:</span></strong><a href="mailto:yohanvisuio@gmail.com"><span style="color: rgb(34, 113, 177); background-color: rgb(255, 255, 255);">yohanvisuio@gmail.com</span></a><br><strong><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">Phone:</span></strong><a href="tel:0703145633"><span style="color: rgb(34, 113, 177); background-color: rgb(255, 255, 255);">0703145633</span></a><br><br></p>
                                            </div>
                                        </div>                
                                        <div class="table-responsive" style="position: static;display: inline;padding: 60px 0px;">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th style="margin-right: 0px;width: 250px;">Item</th>
                                                        <th>Qty</th>
                                                        <th>Price</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>ring</td>
                                                        <td>3</td>
                                                        <td>500</td>
                                                        <td>1500</td>
                                                    </tr>
                                                    <tr></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div>
                                            <p class="text-start" style="width: 200px;height: 40px;display: inline;">Item Sub-total: 1500<br>Total:1500</p>
                                        </div>
        
                                    </div>
                                    <div class="modal-footer">
                                        <div style="display: flex;width: 100%;">         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of modal -->
                    </div>
              
            
            @include('layouts.footer')
            </div>
        </div>
    </div>

