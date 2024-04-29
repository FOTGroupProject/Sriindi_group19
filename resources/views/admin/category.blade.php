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

                        <form method="get" action="/addcategory">
                            @csrf
                            <h3 class="text-dark mb-4">Category</h3><label class="form-label">ADD</label><input class="form-control" type="text" name="category">
                            @error('category')
                            <div class="alert alert-danger">
                            <ul><li>{{ $message }}</li></ul></div>
                            @enderror
                            <div style="height: 12px;"></div><input class="btn btn-primary" type="submit" style="margin: 0px;padding: 5px 5px;height: 35px;"value="Add to Category">
                            @if(session('success2'))
                        <script>
                            alert("Category added succssfully");
                        </script>
                    @endif
                        </form>
                    </div>
                    <div style="border-style: solid;">
                     
                            <h3 class="text-dark mb-4">Current Category</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Control</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->category}}</td>
                                            <td>
                                                <!-- Update Button -->
                                                <button class="btn btn-primary" type="button" style="background: var(--bs-green);"data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $category->id }}">Update</button>
                                                <div class="modal fade" id="staticBackdrop{{ $category->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Category</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="category/{{ $category->id }}" method="get">
      <div class="modal-body">
        <input type="text" name="category" id="" value="{{ $category->category}}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary">
      </div>
      @if(session('success3'))
                        <script>
                            alert("Category updated succssfully");
                        </script>
                 
                    @endif
      </form>
    </div>
  </div>
                                            </div>
                                                <!-- Delete Button -->
                                                <form action="deletecategory/{{ $category->id }}" method="get" style="display: inline;">


                                                    <button type="submit" class="btn btn-primary" style="background: var(--bs-danger);" onclick="return confirm('Are you sure you want to delete this Category?')">Delete</button>
                                                    {{--                    @if(session('success'))--}}
                                                    {{--                        <script>--}}
                                                    {{--                            alert({{$message}});--}}
                                                    {{--                        </script>--}}
                                                    {{--                    @endif--}}

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div style="height: 12px;"></div>
                       
                    </div>


            @include('layouts.footer')
        </div>
    </div>
    </div>
