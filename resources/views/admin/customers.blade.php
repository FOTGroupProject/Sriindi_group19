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
                    <li class="nav-item"><a class="nav-link" href="product"><i class="fas fa-table"></i><span>Product</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="orders"><i class="fas fa-table"></i><span>Orders</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="customers"><i class="fas fa-table"></i><span>Customers</span></a></li>
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
                <div class="container-fluid" style="border: 2.5px none var(--bs-black);padding: 0px 15px;">
                    <div>
                        <h3 class="text-dark mb-4">Orders</h3>
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
                                        <th style="margin-right: 0px;">Order</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Origin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>sake</td>
                                        <td>baselet</td>
                                        <td>baselet</td>
                                        <td>small</td>
                                        <td>10</td>
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
                    <div style="display: flex;width: 100%;">
                        <div class="row" style="height: 300px;width: 33%;margin: 0px;">
                            <div class="col">
                                <h1 style="font-size: 20px;margin: 0;height: 25px;width: 200.9px;"><strong><span style="color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);">General</span></strong><br><br></h1>
                                <p><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">Payment via Cash on delivery. Customer IP:&nbsp;::1</span><br><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">Date created:2023.12.12 @ ‎02:35&nbsp;</span><br><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">Status:</span><span style="color: rgb(44, 51, 56); background-color: rgb(255, 255, 255);">&nbsp; </span><select>
                                        <optgroup label="This is a group">
                                            <option value="12" selected="">Pending payment</option>
                                            <option value="13">Processing</option>
                                            <option value="14">Completed</option>
                                            <option value="Cancelled">Cancelled</option>
                                            <option value="Onhold">On hold</option>
                                            <option value="Refunded">Refunded</option>
                                            <option value="Failed">Failed</option>
                                        </optgroup>
                                    </select><br><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">Customer:</span><span style="color: rgb(44, 51, 56); background-color: rgb(255, 255, 255);">&nbsp;</span><br><span style="color: rgb(68, 68, 68); background-color: rgb(255, 255, 255);">yohanvishvajith@gmail.com</span><br><br><button class="btn btn-primary" type="button" style="height: 40px;width: 70px;padding: 0px;">Update</button><br></p>
                            </div>
                        </div>
                        <div class="row" style="height: 300px;width: 33%;margin: 0px;">
                            <div class="col" style="padding: 0px;">
                                <h1 style="font-size: 20px;margin: 0;height: 25px;text-align: left;"><strong><span style="color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);">Shipping</span></strong><br><br><br><br></h1>
                                <p><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">yoko moko</span><br><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">No.280,Atulgama Road,Ankelipitiya ,Thalatuoya</span><br><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">kandy</span><br><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">20200</span><br><strong><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">Phone:</span></strong><a href="tel:0703145633"><span style="color: rgb(34, 113, 177); background-color: rgb(255, 255, 255);">0703145633</span></a><br><br><br></p>
                            </div>
                        </div>
                        <div class="row" style="height: 300px;width: 33%;margin: 0px;">
                            <div class="col">
                                <h1 style="font-size: 20px;margin: 0;height: 25px;"><strong><span style="color: rgb(51, 51, 51); background-color: rgb(255, 255, 255);">Billing</span></strong><br><br><br><br></h1>
                                <p><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">yoko moko</span><br><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">No.280,Atulgama Road,Ankelipitiya ,Thalatuoya</span><br><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">kandy</span><br><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">20200</span><br><strong><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">Emailaddress:</span></strong><a href="mailto:yohanvisuio@gmail.com"><span style="color: rgb(34, 113, 177); background-color: rgb(255, 255, 255);">yohanvisuio@gmail.com</span></a><br><strong><span style="color: rgb(119, 119, 119); background-color: rgb(255, 255, 255);">Phone:</span></strong><a href="tel:0703145633"><span style="color: rgb(34, 113, 177); background-color: rgb(255, 255, 255);">0703145633</span></a><br><br></p>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive" style="position: static;display: inline;padding: 60px 0px;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="margin-right: 0px;width: 250px;">Item</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>sake</td>
                                    <td>3</td>
                                    <td>500</td>
                                    <td>1500</td>
                                </tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <p class="text-start d-inline d-lg-flex justify-content-lg-end" style="width: 200px;height: 40px;display: inline;">Item Sub-total<br>Total<br><br></p>
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
                            <div class="btn-group" role="group"><button class="btn btn-primary" type="button">Add</button><button class="btn btn-primary" type="button" style="background: var(--bs-teal);">Update</button></div>
                        </form>
                    </div>
                    <div style="border-style: solid;border-color: var(--bs-red);">
                        <form>
                            <h3 class="text-dark mb-4">Category</h3><label class="form-label">ADD</label><input class="form-control" type="text">
                            <div style="height: 12px;"></div><button class="btn btn-primary" type="button" style="margin: 0px;padding: 5px 5px;height: 35px;">Add to Category</button>
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
                                        <tr>
                                            <td>cat01</td>
                                            <td>ring</td>
                                            <td><button class="btn btn-primary" type="button" style="background: var(--bs-green);">Update</button><button class="btn btn-primary" type="button" style="background: var(--bs-danger);">Delete</button></td>
                                        </tr>
                                        <tr></tr>
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
                    <h3 class="text-dark mb-4">Team</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Employee Info</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length-2" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6" style="text-align: right;"><select class="d-inline-block form-select form-select-sm" style="width: 150px;">
                                        <option value="black" selected="">black list</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select></div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Last Active</th>
                                            <th>Date Register</th>
                                            <th>Email</th>
                                            <th>Orders</th>
                                            <th>Total<br>Spend</th>
                                            <th>IP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg">Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar2.jpeg">Angelica Ramos</td>
                                            <td>Chief Executive Officer(CEO)</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2009/10/09<br></td>
                                            <td>$1,200,000</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar3.jpeg">Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12<br></td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar4.jpeg">Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>2012/10/13<br></td>
                                            <td>$132,000</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar5.jpeg">Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>28</td>
                                            <td>2011/06/07<br></td>
                                            <td>$206,850</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg">Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02<br></td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar2.jpeg">Bruno Nash<br></td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>38</td>
                                            <td>2011/05/03<br></td>
                                            <td>$163,500</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar3.jpeg">Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>21</td>
                                            <td>2011/12/12<br></td>
                                            <td>$106,450</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar4.jpeg">Cara Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>46</td>
                                            <td>2011/12/06<br></td>
                                            <td>$145,600</td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar5.jpeg">Cedric Kelly</td>
                                            <td>Senior JavaScript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29<br></td>
                                            <td>$433,060</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><strong>Name</strong></td>
                                            <td><strong>Position</strong></td>
                                            <td><strong>Office</strong></td>
                                            <td><strong>Age</strong></td>
                                            <td><strong>Start date</strong></td>
                                            <td><strong>Salary</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info-1" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
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