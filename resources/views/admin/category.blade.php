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

                <div class="container-fluid" style="border: 2.5px none var(--bs-black);padding: 0px;">
                </div>
                <div style="border-style: solid;margin: 0px;padding: 20px;">
                    <h3 class="text-dark mb-4">Add New Product</h3>
                    <form method="get" action="/addproduct">
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
                <div>
                    @if(session('success'))
                        <script>
                            alert("product added succssfully");
                        </script>
                    @endif
            </div>
            @include('layouts.footer')
        </div>
    </div>
    </div>
