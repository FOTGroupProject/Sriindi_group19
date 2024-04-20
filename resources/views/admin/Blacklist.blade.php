@include('layouts.header')
<body id="page-top">
    <div id="wrapper">
{{--        //sidebar item goes here--}}
@include('layouts.sidebar')
{{--        end of sidebar--}}

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
{{--                //nav goes here--}}
             @include('layouts.nav')
                {{--        end of nav item--}}


                <div style="border-style: solid;">
                    <h3 class="text-dark mb-4">Ratings</h3>
                    <div class="row">
                        <div class="col-md-6 text-nowrap">
                            <div id="dataTable_length-1" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                        <option value="10" selected="">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>&nbsp;</label></div>
                        </div>
                        <div class="col-md-6 text-end" style="position: static;"><select style="text-align: right;position: relative;">
                                <option value="all" selected="">All</option>
                                <option value="13">Stock</option>
                                <option value="14">Popularity</option>
                                <option value="">Black list</option>
                            </select>
                            <div class="text-md-end dataTables_filter" id="dataTable_filter-1" style="text-align: right;width: 240.0px;height: 40px;position: relative;display: inline-block;"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label><button class="btn btn-primary" type="button">Go</button></div>
                        </div>
                    </div>
                    <div class="table-responsive" style="position: relative;">
                        <table class="table">
                            <thead>
                            <tr>

                                <th style="margin-right: 0px;">Product ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>size</th>
                                <th>Avg Rating</th>
                                <th>positive review</th>
                                <th>negative review</th>
                                <th>Function</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <td>ring</td>
                                <td><img src="assets/img/ring.jfif" width="50px" height="50px"></td>

                                <td>small</td>
                                <td>8</td>
                                <td>500</td>
                                <td>10</td>

                                <td>small</td>

                                <td><input type="submit" class="btn btn-danger" value="Add to Blacklist"> </td>
                            </tr>
                            <tr></tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <p id="dataTable_info-2" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
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
                </div>


            @include('layouts.footer')
        </div>
    </div>
    </div>
