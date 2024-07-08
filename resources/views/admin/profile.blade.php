<!DOCTYPE html>
<html data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">

    
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <style>
        .image-preview {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-color: #f0f0f0;
            background-size: cover;
            background-position: center;
            margin-bottom: 15px;
        }
    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-expand bg-white shadow mb-4 topbar static-top navbar-light">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <h3 class="text-dark mb-4">Profile</h3>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow">
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                           
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                       
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                               
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">xxx</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                   
                    <div class="row mb-3">
                 
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="" width="160" height="160">
                                <div class="mb-3">
                <input class="btn btn-primary btn-sm" type="file" id="imageUpload" accept="image/*">
                <label for="imageUpload" class="btn btn-primary btn-sm">Change Photo</label>
            </div>
                                </div>
                            </div>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="text-primary fw-bold m-0">Change Password</h6>
                                </div>
                                <div class="card-body">
                                    <form method="get" action="/updatepassword">
                                        
                                        <div class="mb-3"><label class="form-label" for="currentpassword" ><strong>Current Password</strong></label><input required class="form-control" type="password" id="currentpassword" placeholder="Enter your current password" name="currentpassword"></div>
                                        <div class="mb-3"><label class="form-label" for="newpassword" ><strong>New Password</strong></label><input required class="form-control" type="password" id="newpassword" placeholder="Enter your new password" name="newpassword"></div>
                                        <div class="mb-3"><label class="form-label" for="confirmpassword" ><strong>Confirm Password</strong></label><input required class="form-control" type="password" id="confirmpassword" placeholder="Confirm your new password" name="newpassword_confirmation"></div>
                                        <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Save&nbsp;Password</button></div>
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                     @endif
                                    @if  (Session::has('success'))
                                    <script>
                                        alert("{{Session::get('success')}}" );
                                    </script>
                                    @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row mb-3 d-none">
                                <div class="col">
                                    <div class="card text-white bg-primary shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card text-white bg-success shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">User Settings</p>
                                        </div>
                                        <div class="card-body">
                                            <form method="get" action="/updateusersetting">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="username"><strong>Username</strong></label><input class="form-control" type="text" id="username" name="username" required value="{{ $adminuser->username }}"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="email"><strong>Email Address</strong></label><input class="form-control" type="email" id="email" name="email" required value="{{ $adminuser->email }}"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="first_name"><strong>First Name</strong></label><input class="form-control" type="text" id="first_name" name="first_name"required value=" {{ $adminuser->first_name }}"></div>
                                                        
                                                        @foreach ($errors->get('first_name') as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                    @foreach ($errors->get('last_name') as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                    @foreach ($errors->get('email') as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                    @foreach ($errors->get('username') as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="last_name"><strong>Last Name</strong></label><input class="form-control" type="text" id="last_name" required name="last_name" value=" {{ $adminuser->last_name }}"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Save Settings</button></div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card shadow">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Contact Settings</p>
                                        </div>
                                        <div class="card-body">
                                            <form action="/updatecontactsetting" method="get">
                                                <div class="mb-3"><label class="form-label" for="address"><strong>Address</strong></label><input class="form-control" type="text" id="address" placeholder="Sunset Blvd, 38" name="address" value="{{ $adminuser->address }}"></div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="city"><strong>City</strong></label><input class="form-control" type="text" id="city" placeholder="Los Angeles" name="city" value="{{ $adminuser->city }}"></div>
                                                    </div>
                                                    @foreach ($errors->get('Address') as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                    @foreach ($errors->get('City') as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                    @foreach ($errors->get('contact') as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="country"><strong>Contact Number</strong></label><input class="form-control" type="text" id="country" name="contact" value="{{ $adminuser->contact }}"></div>
                                                    </div>
                                                </div>
                                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Save&nbsp;Settings</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div><button class="btn btn-primary" type="button" style="background: var(--bs-red);">Delete Account</button>
                    <div class="card shadow mb-5">
                       
                        
                    </div>

                </div>
            </div>
          
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
    <script>
    document.getElementById('imageUpload').addEventListener('change', function(event) {
        var input = event.target;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').style.backgroundImage = 'url(' + e.target.result + ')';
            }
            reader.readAsDataURL(input.files[0]);
        }
    });
</script>
</body>

</html>