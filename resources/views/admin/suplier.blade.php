@include('layouts.header')

<body id="page-top">
    <div id="wrapper">
        @include('layouts.sidebar')
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
               @include('layouts.nav')
                <div class="container-fluid">
                    <h3 class="text-dark mb-1">Add Suppliers</h3>
                  
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Supplier ID</th>
                                        <th>Supplier Name</th>
                                        <th>E-mail</th>
                                        <th>phone</th>
                                        <th>Address</th>
                                        <th>Tax ID</th>
                                        <th>Active/Inactive</th>
                                        <th>function</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($supplier as $suppliers)
                                <tr>
                                    <td>{{ $suppliers->id }}</td>
                                    <td>{{ $suppliers->name }}</td>
                                    <td>{{ $suppliers->email }}</td>
                                    <td>{{ $suppliers->phone }}</td>
                                    <td>{{ $suppliers->address }}</td>
                                    <td>{{ $suppliers->tax_id }}</td>
                                    <td>{{ $suppliers->active }}</td>
                                    
                                    <td>
                                    <form action=""method="get">
                                    <input type="submit" class="btn btn-primary" value="update">
                                    </form>
                                    <a href="destroysupplier/{{$suppliers->id}}">    <button class="btn btn-danger" >Delete</button></a>
                                    
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                   
                </div>
            </div>


            <form method="get" action="/addsupplier">

    <div class="form-group">
        <label for="name">Supplier Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" id="phone" name="phone" required>
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="address" required>
    </div>
    <div class="form-group">
        <label for="tax_id">Tax ID:</label>
        <input type="text" class="form-control" id="tax_id" name="tax_id" required>
    </div>
    <div class="form-group">
        <label for="active">Active/Inactive:</label>
        <select name="active">
            <option value="active" selected>Active</option>
            <option value="inactive" >Inactive</option>
        </select>
    </div>

    <input type="submit" class="btn btn-success" value="Add Supplier">
</form>

<div class="table-responsive">
    <table class="table">
        <!-- Table headers and rows for displaying existing suppliers -->
        <!-- Add the existing supplier table code here -->
    </table>
</div>


        @include('layouts.footer')
</body>

</html>
