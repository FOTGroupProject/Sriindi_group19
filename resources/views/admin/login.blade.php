<!DOCTYPE html>
<html data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Admin</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>
<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                <div class=" w-100 p-3" >

                </div>    
                <div class="card-body w-100 p-3" >
                        <div class="row">
                        <div class="col-lg-5 d-none d-lg-flex" style="display: flex; justify-content: center; align-items: center;">
                    <div class="bg-register-image" style="background: url('assets/img/logo.png') no-repeat center; width: 400px; height: 585.9px; font-size: 15px; background-size: contain;"></div>
                </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Welcome Back!</h4>
                                    </div>
                                    <form class="user" action="/loginadmin" method="post">

                                        @csrf
                                        <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="username" required></div>
                                        <div class="mb-3"><input class="form-control form-control-user" type="password" id="InputPassword" placeholder="Password" name="password"required></div>
                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                            </div>
                                        </div><button class="btn btn-primary d-block btn-user w-100" type="submit"id="loginButton" disabled>Login</button>
                                       <br>
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
                                    <div class="text-center"><a class="small" href="/forgotpassword">Forgot Password?</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var passwordInput = document.getElementById('InputPassword');
            var loginButton = document.getElementById('loginButton');

            passwordInput.addEventListener('input', function() {
                if (passwordInput.value.length > 8) {
                    loginButton.removeAttribute('disabled');
                } else {
                    loginButton.setAttribute('disabled', 'disabled');
                }
            });
        });
    </script>
</body>

</html>