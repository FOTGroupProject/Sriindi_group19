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
                                @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#orderModal" data-order-id="{{$order->id}}">{{$order->status}}</button></td>
                                    <td>{{$order->total}}</td>
                                </tr>
                                @endforeach
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
                        <div class="modal fade" id="orderModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="orderModalLabel">Order Details</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Order details will be loaded here -->
                                    <div id="order-details-content"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end of modal -->
                        <script>
document.addEventListener('DOMContentLoaded', function() {
    var orderModal = document.getElementById('orderModal');
    orderModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var orderId = button.getAttribute('data-order-id');
        // AJAX request to get order details
        fetch('/orderdetails/' + orderId)
            .then(response => response.json())
            .then(order => {
                var orderDetailsContent = document.getElementById('order-details-content');
                orderDetailsContent.innerHTML = `
                    
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <p class="text-start">Item Sub-total: ${order.item_subtotal}<br>Shipping: ${order.shipping_cost}<br>Total: ${order.total}</p>
                    </div>
                `;
            });
    });
});
</script>
                    </div>
              
            
            @include('layouts.footer')
            </div>
        </div>
    </div>

