@include('layouts.header')
<body id="page-top" onload="onLoadFunction()">
    <div id="wrapper">
        @include('layouts.sidebar')
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
               @include('layouts.nav')
                

                    <h3 class="text-dark mb-1">Suppliers</h3>
                    <div class="table-responsive">
                        <table class="table" id="suppliertable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>phone</th>
                                    <th>Address</th>
                                    <th>Tax ID</th>
                                    <th>Active/Inactive</th>
                                    <th>status</th>
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
                                <td>{{ $suppliers->blacklisted }}</td>
                                <td>
                                <button class="btn btn-primary " type="button" style="background: var(--bs-green);" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $suppliers->id }}">Up</button>
                                

                                <a href="destroysupplier/{{$suppliers->id}}"><button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this supplier?')">Del</button></a>
                                <a href="addtoblacklist/{{$suppliers->id}}"><button  class="btn btn-primary blacklist-btn" onclick="return confirm('Are you sure you want to add this supplier to blacklist?')">Bla</button></a>
                                <a href="removeblacklist/{{$suppliers->id}}"><button id="removeblacklist" class="btn btn-primary remove-blacklist-btn" onclick="return confirm('Are you sure you want to remove this supplier from blacklist?')">Rem</button></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="modal fade" id="staticBackdrop{{  $suppliers->id  }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Supplier</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="updatesupplier/{{ $suppliers->id}}" method="get">
                                                <div class="form-group">
                                                    <label for="name">Supplier Name:</label>
                                                    <input type="text" class="form-control" id="name" name="name" value="{{ $suppliers->name }}" autocomplete="name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">E-mail:</label>
                                                    <input type="email" class="form-control" id="email" name="email" value="{{ $suppliers->email }}" autocomplete="email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone">Phone:</label>
                                                    <input type="number" class="form-control" id="phone" name="phone" value="{{ $suppliers->phone }}" autocomplete="phone" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="address">Address:</label>
                                                    <input type="text" class="form-control" id="address" name="address" value="{{ $suppliers->address }}" autocomplete="address" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tax_id">Tax ID:</label>
                                                    <input type="text" class="form-control" id="tax_id" name="tax_id" value="{{ $suppliers->tax_id }}" autocomplete="taxid" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="activ">Active/Inactive:</label>
                                                    <select name="active">
                                                        <option value="active" {{ $suppliers->active == 'active' ? 'selected' : '' }}>Active</option>
                                                        <option value="inactive" {{ $suppliers->active == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                                    </select>
                                                </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-primary">
                                            </div>
                                            @if(session('successupdate'))
                                                <script>
                                                    alert("supplier updated successfully");
                                                </script>
                                            @endif
                                        
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                
                        <h3 class="text-dark mb-1">Add Suppliers</h3>
                        <form method="get" action="/addsupplier">
                            <div class="form-group">
                                <label for="name">Supplier Name:</label>
                                <input type="text" class="form-control" id="name" name="name" autocomplete="name"required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail:</label>
                                <input type="email" class="form-control" id="email" name="email" autocomplete="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input type="text" class="form-control" id="phone" name="phone" autocomplete="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" class="form-control" id="address" name="address" autocomplete="address" required>
                            </div>
                            <div class="form-group">
                                <label for="tax_id">Tax ID:</label>
                                <input type="text" class="form-control" id="tax_id" name="tax_id" autocomplete="taxid" required>
                            </div>
                            <div class="form-group">
                                <label for="activ">Active/Inactive:</label><br>
                                <select name="active" id="activ">
                                    <option value="active" selected>Active</option>
                                    <option value="inactive" >Inactive</option>
                                </select>
                            </div>
                            <br>
                            <input type="submit" class="btn btn-success " value="Add Supplier">
                            <input type="reset" class="btn btn-primary " value="Clear">
                            @if(session('success2'))
                                <script>
                                    alert("supplier added successfully");
                                </script>
                            @endif
                        </form>
                        <br>
                        <hr>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        @include('layouts.footer')
            </div>
        </div>
    </div>
<script>
function onLoadFunction(){

var table = document.getElementById('suppliertable');
var rows = table.rows;
for (var i = 1; i < rows.length; i++) {
        var cells = rows[i].cells;
        var blist = cells[7].innerText.trim(); 
        if (blist =="yes"){
            rows[i].querySelector('.blacklist-btn').style.display = "none";
        }
        else{
            rows[i].querySelector('.remove-blacklist-btn').style.display = "none";
        }
}
}
</script>
</body>