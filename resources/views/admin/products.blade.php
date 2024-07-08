@include('layouts.header')
<body id="page-top" onload="onLoadFunction()">
<div id="wrapper">
    {{--        //sidebar item goes here--}}
    @include('layouts.sidebar')
    {{--        end of sidebar--}}
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            {{--                //nav goes here--}}
            @include('layouts.nav')
            {{--        end of nav item--}}
            <div>
                <div class="row">
                    <h3 class="text-dark mb-4">Products</h3>
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
                            <select style="text-align: right;position: relative;" onchange="filterProducts()"id="productoption">
                                <option value="Instock">Instock</option>
                                <option value="outstock">outstock</option>
                                <option value="Popularity" selected>Popularity</option>
                                <option value="Blacklist">Blacklist</option>
                            </select>
                            <div class="text-md-end dataTables_filter" id="dataTable_filter" style="text-align: right;width: 240.0px;height: 40px;position: relative;display: inline-block;"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label><button class="btn btn-primary" type="button">Go</button></div>
                        </div>
                </div>
                <div class="table-responsive" style="position: relative;">
                    <table class="table" id="product_table">
                        <tr>
                            <th style="margin-right: 0px;width: 80.0px;text-align: center;" id="product_id_col">Product ID</th>
                            <th style="width: 110.0px;">Name</th>
                            <th>Category</th>
                            <th>Supplier ID</th>
                            <th>Image</th>
                            <th>SKU</th>
                            <th>sdescription</th>
                            <th style="width: 70px;">Quantity</th>
                            <th style="width: 100px;">Regular Price</th>
                            <th style="width: 80px;">Sales Price</th>
                            <th style="width: 80px;">blacklist</th>
                            <th style="width: 80px;"id="total_quantity_col">total ordered</th>
                            <th class="text-center" style="position: relative;width: 150px;">Options</th>
                        </tr>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->supplier_id }}</td>
                            <td><img src="products/{{$product->image }}" width="50px" height="50px"></td>
                            <td>{{ $product->sku }}</td>
                            <td>{{ $product->sdescription }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->regularprice }}</td>
                            <td>{{ $product->salesprice }}</td>
                            <td>{{ $product->blacklist_status }}</td>
                            <td>{{ $product->total_quantity_ordered }}</td>
                            <td class="text-center" style="padding: 0px;">
                                <button  class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModalCenter">Update</button>
                                    <a href="/deleteproduct/{{ $product->id }}"><button class="btn btn-danger" type="submit"onclick="deleteproduct()">Delete</button></a>
                                <script>
                                    function deleteproduct(){
                                        alert('Are you sure you want to delete this product?');
                                    }
                                </script>
                                @if(session('success'))
                                <script>
                                    alert('{{ session('success') }}');
                                </script>
                                @endif
                            </td>
                        </tr>
                        
                    </table>
                    <script>
                        function onLoadFunction(){
                            var selectedValue = document.getElementById('productoption').value;
                            var table = document.getElementById('product_table');
                            var rows = table.rows;

                            for (var i = 1; i < rows.length; i++){
                                    var cells = rows[i].cells;
                                    var blist = cells[9].innerText.trim(); 
                                    if (blist =="Yes"){
                                        rows[i].style.backgroundColor = 'yellow'; 
                                    }
                            }
                        
                        }

                        function filterProducts(){
                            var selectedValue = document.getElementById('productoption').value;
                            var table = document.getElementById('product_table');
                            var rows = table.rows;
                            if (selectedValue === 'all') {
                                for (var i = 1; i < rows.length; i++) {
                                    rows[i].style.display = 'table-row';
                                }
                            } 
                            else if (selectedValue === 'Popularity') {
                                var table, rows, switching, i, x, y, shouldSwitch;
                            table = document.getElementById("product_table");
                            switching = true;

                        while (switching){
                            switching = false;
                            rows = table.rows;

                            for (i = 1; i < rows.length - 1; i++) {
                                shouldSwitch = false;
                                x = rows[i].getElementsByTagName("td")[10]; // Index 10 corresponds to the total_quantity_ordered column
                                y = rows[i + 1].getElementsByTagName("td")[10];

                                if (parseInt(x.innerHTML) < parseInt(y.innerHTML)) {
                                    shouldSwitch = true;
                                    break;
                                }
                            }

                            if (shouldSwitch) {
                                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                                switching = true;
                            }
                        }
                            } 
                            else if (selectedValue === 'outstock'){
                                for (var i = 1; i < rows.length; i++) {
                                    var cells = rows[i].cells;
                                    var quantity = parseInt(cells[6].innerText.trim());
                                    if (quantity < 10) {
                                        rows[i].style.display = 'table-row';  
                                    } else {
                                        rows[i].style.display = 'none';
                                    
                                    }
                                    
                                }
                            }else if(selectedValue === 'Instock'){
                                for (var i = 1; i < rows.length; i++) {
                                    var cells = rows[i].cells;
                                    var quantity = parseInt(cells[6].innerText.trim());
                                    if (quantity > 5) {
                                        rows[i].style.display = 'table-row';  
                                    } else {
                                        rows[i].style.display = 'none';
                                    
                                    }
                                    }
                            }else if(selectedValue === 'Blacklist'){
                                for(var i = 1; i < rows.length; i++) {
                                    var cells = rows[i].cells;
                                    var blist = cells[9].innerText.trim(); 
                                    if (blist =="Yes"){
                                        rows[i].style.display = 'table-row';  
                                    }
                                    else{
                                        rows[i].style.display = 'none';
                                    }
                                }   
                            }
                        }
                    </script>
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Update Product</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="get" action="/updateproduct/{{ $product->id }}">
                                                <label class="form-label">Name</label><input class="form-control" type="text" name="name"value="{{ $product->name }}">
                                                <label class="form-label">Short Description</label><textarea class="form-control" rows="4" cols="10" name="sdescription" required value="{{ $product->sdescription }}"></textarea><br>
                                                <label class="form-label">Image</label><br><img src="products/{{$product->image }}" width="50px" height="50px"><br>
                                                <label class="form-label">Upload Image</label><input class="form-control" type="file" name="image">
                                                <label class="form-label">SKU</label><input class="form-control" type="text" name="sku"required value="{{ $product->sku }}">
                                                <label class="form-label">Category</label><select class="form-select d-inline-block form-select form-select-sm" name="category" selected="{{ $product->category }}">
                                                    @foreach($categories as $category){
                                                    <option value="{{ $category->category }}">{{ $category->category }}</option>
                                                    }
                                                    @endforeach
                                                </select>
                                                <label class="form-label">Supplier</label><select class="form-select d-inline-block form-select form-select-sm" name="supplier"value="{{ $product->supplier_id }}">
                                                    @foreach($suppliers as $supplier)
                                                    <option value="{{ $category->category }}">{{ $supplier->name }}</option>
                                                    
                                                    @endforeach
                                                </select>
                                                <label class="form-label">Quantity</label><input class="form-control" type="number" name="quantity"required value="{{ $product->quantity }}">
                                                <label class="form-label">Regular Price</label><input class="form-control" type="number" step="0.01" name="regularprice"required value="{{ $product->regularprice }}">
                                                <label class="form-label">Sales Price</label><input class="form-control" type="number" step="0.01" name="salesprice"required value="{{ $product->salesprice }}">
                                                @error('name')
                                                <div class="text-red-500">{{ $message }}</div>
                                                @enderror
                                               
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <input class="btn btn-primary" type="submit"value="Save changes">
                                        </div>
                                        </form>
                                        @endforeach
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
            </div>
        </div>
    </div>
</div>
