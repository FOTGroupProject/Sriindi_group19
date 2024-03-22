<!DOCTYPE html>
<html data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#" style="background: var(--bs-link-hover-color);width: 100%;">
                    <div class="sidebar-brand-icon rotate-n-15"><img style="background: url(&quot;assets/img/sriindi%20(1)_240131_232354-1.png&quot;);transform: rotate(15deg);" src="assets/img/sriindi%20(1)_240131_232354-1.png" width="70" height="70"></div>
                    <div class="sidebar-brand-text mx-3"><span class="text-lowercase" style="font-family: ABeeZee, sans-serif;">Sriindi</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="index"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="profile"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="product"><i class="fas fa-table"></i><span>Product</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="orders"><i class="fas fa-table"></i><span>Orders</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="customers"><i class="fas fa-table"></i><span>Customers</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="login"><i class="far fa-user-circle"></i><span>Login</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="register"><i class="fas fa-user-circle"></i><span>Register</span></a><a class="nav-link" href="blank.html"><i class="fas fa-window-maximize"></i><span>Suppliers</span></a><a class="nav-link" href="register.html" style="background: var(--bs-danger);"><i class="fas fa-user-circle"></i><span>Logout</span></a></li>
                    <li class="nav-item"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-expand bg-white shadow mb-4 topbar static-top navbar-light">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..."><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid" style="border: 2.5px none var(--bs-black);padding: 0px;">
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
                                        <th>Veriety</th>
                                        <th style="width: 70px;">Quantity</th>
                                        <th style="width: 100px;">Regular Price</th>
                                        <th style="width: 80px;">Sales Price</th>
                                        <th class="text-center" style="position: relative;width: 150px;">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>baselet</td>
                                        <td>baselet</td>
                                        <td>small</td>
                                        <td>10</td>
                                        <td>500</td>
                                        <td style="width: 100px;">450</td>
                                        <td>450</td>
                                        <td>450</td>
                                        <td class="text-center" style="padding: 0px;">
                                            <form action="" method="get">
                                            <input class="btn btn-primary" type="submit" style="background: var(--bs-teal);border-width: 0px;margin: 5px;margin-right: 0px;height: 30px;width: 61.8px;padding: 0px;position: static;display: inline-block;"value="Update"></button>
                                        </form>
                                        <form action="" method="get">
                                            <input class="btn btn-primary" type="submit" style="background: var(--bs-red);border-width: 0px;margin: 5px;margin-right: 0px;height: 30px;width: 61.8px;padding: 0px;text-align: center;position: sticky;display: inline;" value="Delete"></button>></button>
                                        </form>
                                        </td>
                                        <td class="text-center" style="padding: 0px;"></td>
                                    </tr>
                                    <tr></tr>
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
                    <div style="border-style: solid;border-color: var(--bs-black);margin: 0px;padding: 20px;">
                        <h3 class="text-dark mb-4">Add New Product</h3>
                        <form><label class="form-label">ID</label><input class="form-control" type="text"><label class="form-label">Name</label><input class="form-control" type="text"><label class="form-label">Short Description</label><input class="form-control" type="text"><label class="form-label">Discription</label><input class="form-control" type="text"><label class="form-label">Image</label><input class="form-control" type="file"><label class="form-label">SKU</label><input class="form-control" type="text"><label class="form-label">Category</label><select class="form-select d-inline-block form-select form-select-sm">
                                <option value="10" selected="">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select><label class="form-label">Veriety</label><select class="form-select">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select><label class="form-label">Quantity</label><input class="form-control" type="number"><label class="form-label">Regular Price</label><input class="form-control" type="text"><label class="form-label">Sales Price</label><input class="form-control" type="text">
                            <div class="btn-group" role="group"><input class="btn btn-primary" type="submit"><input class="btn btn-primary" type="submit" style="background: var(--bs-teal);"></div>
                        </form>
                    </div>
                    <div style="padding: 30px;border-style: solid;">
                    @if(session('success'))
                    <script>
                   alert("{{ session('success') }}");
                    </script>
                    @endif
                        <form method="get" action="/addblacklist">
                        @csrf
                            <h3 class="text-dark mb-4">Black List</h3><label class="form-label">ID</label><input class="form-control" type="text"name="product_id" value="{{ old('name') }}">
                            @error('product_id')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                            <div style="height: 12px;"></div><input class="btn btn-primary" type="submit" style="margin: 0px;padding: 5px 5px;height: 35px;"value="Add to Backlist">
                        </form>
                    </div>
                    <div style="border-style: solid;border-color: var(--bs-red);">
                        <form method="get" action="/addcategory">
                        @csrf
                            <h3 class="text-dark mb-4">Category</h3><label class="form-label">ADD</label><input class="form-control" type="text" name="category">
                            @error('category')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                            <div style="height: 12px;"></div><input class="btn btn-primary" type="submit" style="margin: 0px;padding: 5px 5px;height: 35px;"value="Add to Category">
                        </form>
                    </div>
                    <div style="border-style: solid;border-color: var(--bs-purple);">
                        <form>
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
            <td>{{ $category->category_id }}</td>
            <td>{{ $category->category}}</td>
            <td>
                <!-- Update Button -->
                <button class="btn btn-primary" type="button" style="background: var(--bs-green);">Update</button>
                
                <!-- Delete Button -->
                <form action="/jk" method="get" style="display: inline;">
                    
                    
                    <button type="submit" class="btn btn-primary" style="background: var(--bs-danger);" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
                                </table>
                            </div>
                            <div style="height: 12px;"></div>
                        </form>
                    </div>
                    <div style="border-style: solid;border-color: var(--bs-purple);">
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
                                        <th>Auther</th>
                                        <th style="margin-right: 0px;">Product ID</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Rating</th>
                                        <th>Review</th>
                                        <th>Submit Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>baselet</td>
                                        <td>baselet</td>
                                        <td>small</td>
                                        <td>10</td>
                                        <td>500</td>
                                        <td>450</td>
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
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © sriindi 2024</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>