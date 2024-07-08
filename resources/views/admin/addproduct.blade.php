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
                    <h3 class="text-dark mb-4">Add New Product</h3>   
                    <form action="/addproduct" method="post" enctype="multipart/form-data">
                        @csrf
                        <label class="form-label">Name</label><input class="form-control" type="text" name="name" >
                        <label class="form-label">Category</label><select class="form-select d-inline-block form-select form-select-sm" name="category">
                        @foreach($categories as $category){
                        <option value="{{ $category->category }}">{{ $category->category }}</option>
                        }
                        @endforeach
                        </select>
                        <label class="form-label">Supplier</label><select class="form-select d-inline-block form-select form-select-sm" name="supplier">
                            @foreach($suppliers as $Supplier){
                            <option value="{{ $Supplier->id }}">{{ $Supplier->name }}</option>
                            }
                            @endforeach
                        </select>
                        <label class="form-label">Short Description</label><textarea class="form-control" rows="4" cols="10" name="sdescription"  placeholder="max 200 character"></textarea>
                        <label class="form-label">Image</label><input type="file" name="image" class="form-control">
                        <label class="form-label">SKU</label><input class="form-control" type="text" name="sku">
                        <label class="form-label">Quantity</label><input class="form-control" type="number" name="quantity">
                        <label class="form-label">Regular Price</label><input class="form-control" type="number" step="0.01" name="regularprice">
                        <label class="form-label">Sales Price</label><input class="form-control" type="number" step="0.01" name="salesprice">                 
                        <button type="submit" class="btn btn-primary">Upload</button>
                        @if(session('image'))
                        <div>
                            <img src="/images/{{ session('image') }}" alt="Uploaded Image">
                        </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    @if(session('success'))
                    <script>
                        alert("Product Added Successfully");
                    </script>
                    @endif
                    </form>

                </div>
              
               
            
                @include('layouts.footer')
            </div>
        </div>
    </div>
