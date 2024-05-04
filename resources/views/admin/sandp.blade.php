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
                <div style="border-style: solid;margin: 0px;padding: 20px;">
                    <h3 class="text-dark mb-4">Add Quantity</h3>




                    <form method="POST" action="{{ route('suplier.viewproducts') }}">
                     @csrf
                     <h3>Choose Supplier</h3>
                     <select class="form-select d-inline-block form-select form-select-sm" name="supplier">
                            @foreach($suppliers as $supplier)
                            <option value="{{ $supplier->id }}">{{$supplier->name }}</option>
                            
                            @endforeach
                    </select>
                    <input type="submit" value="search">
                    </form>

                    <h3>Choose Products</h3>
                    <table class="table" id="product_table">
                            <tr>
                                <th style="margin-right: 0px;width: 80.0px;text-align: center;" id="product_id_col">Product ID</th>
                                <th style="width: 110.0px;">Name</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>SKU</th>
                                
                                <th style="width: 70px;">Quantity</th>
                               
                                
                                           </tr>
                                           @if($products->isNotEmpty())
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category }}</td>
                                    <td><img src="{{ $product->image }}" width="50px" height="50px"></td>
                                    <td>{{ $product->sku }}</td>
                                    <td>{{ $product->quantity }}</td>
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
                            @else
                            <p>No products found.</p>
                            @endif
                        </table>
                      
                </div>
            @include('layouts.footer')
             
        </div>
    </div>
