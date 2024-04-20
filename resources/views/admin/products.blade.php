@include('layouts.header')
<body id="page-top">
    <div id="wrapper">
       @include('layouts.sidebar')

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">


                        <form method="post" action="/addblacklist">
                        @csrf
                            <h3 class="text-dark mb-4">Black List</h3><label class="form-label">ID</label><input class="form-control" type="text"name="product_id" value="{{ old('name') }}">
                            @error('product_id')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                            <div style="height: 12px;"></div><input class="btn btn-primary" type="submit" style="margin: 0px;padding: 5px 5px;height: 35px;"value="Add to Backlist">
                        </form>
                    </div>

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
                                        <th>Avg Rating</th>
                                        <th>positive review</th>
                                        <th>negative review</th>
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

                </div>
                <div>
                        <h3 class="text-dark mb-4">Products</h3>
                        <div class="row">
                            <div class="col-md-6 text-nowrap">
                                <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
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
                                <div class="text-md-end dataTables_filter" id="dataTable_filter" style="text-align: right;width: 240.0px;height: 40px;position: relative;display: inline-block;"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label><button class="btn btn-primary" type="button">Go</button></div>
                            </div>
                        </div>
                        <div class="table-responsive" style="position: relative;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="margin-right: 0px;width: 80.0px;text-align: center;">Product ID</th>
                                        <th style="width: 110.0px;">Name</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>SKU</th>
                                        <th>sdescription</th>
                                        <th style="width: 70px;">Quantity</th>
                                        <th style="width: 100px;">Regular Price</th>
                                        <th style="width: 80px;">Sales Price</th>
                                        <th class="text-center" style="position: relative;width: 150px;">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category }}</td>
                        <td><img src="{{ $product->image }}" width="50px" height="50px"></td>
                        <td>{{ $product->sku }}</td>
                        <td>{{ $product->sdescription }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->regularprice }}</td>
                        <td>{{ $product->salesprice }}</td>
                        <td class="text-center" style="padding: 0px;">
                            <button  class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModalCenter">Update</button>


                            <form action="/deleteproduct" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form method="get" action="/updateproduct">
                                        <label class="form-label">Name</label><input class="form-control" type="text" name="name" required>
                                        <label class="form-label">Short Description</label><textarea class="form-control" rows="4" cols="10" name="sdescription" required placeholder="max 200 character"></textarea>
                                        <label class="form-label">Image</label><input class="form-control" type="file" name="image">
                                        <label class="form-label">SKU</label><input class="form-control" type="text" name="sku"required>
                                        <label class="form-label">Category</label><select class="form-select d-inline-block form-select form-select-sm" name="category">
                                            @foreach($categories as $category){
                                            <option value="{{ $category->category }}">{{ $category->category }}</option>
                                            }
                                            @endforeach
                                        </select>
                                        <label class="form-label">Quantity</label><input class="form-control" type="number" name="quantity"required>
                                        <label class="form-label">Regular Price</label><input class="form-control" type="number" step="0.01" name="regularprice"required>
                                        <label class="form-label">Sales Price</label><input class="form-control" type="number" step="0.01" name="salesprice"required>
                                        @error('name')
                                        <div class="text-red-500">{{ $message }}</div>
                                        @enderror
                                        <input class="btn btn-primary" type="submit">
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
            </div>
           @include('layouts.footer')
