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
                                        <h3 class="text-dark mb-4">Forget Password</h3>
                                    </div>
                                    <br><br>
                                    <form class="user" action="/forgetpassform" method="post">
                                        @csrf
                                        <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" required required></div>
                                        <button id="sendotp" class="btn btn-primary d-block btn-user w-100" type="submit">Send OTP</button>
                                    </form>
                                    <br>
                                   
                                    <form class="user" action="/otp" method="get">
                                        <div class="mb-3"><input class="form-control form-control-user" required type="text" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter OTP" name="otp" required></div>
                                        <button id="otpbtn"class="btn btn-primary d-block btn-user w-100" type="submit" >Verify</button>
                                    </form>
                                       <br>
                                       @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        {{ $error }}
                                                    @endforeach
                                                </ul>
                                            </div>
                                     @endif
                                    @if  (Session::has('success'))
                                    <div class="alert alert-success">
                                        {{Session::get('success')}} 
                                    </div>

                                    @endif
                                    
                                    @if  (Session::has('otp'))
                                    <script>
                                        console.log("{{Session::get('otp')}}" );
                                    </script>
                                    @endif
                                    <div class="text-center"><a class="small" href="/adminlogin">Back to Login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script>
 
        function onLoadFunction() {
            var otpbtn = document.getElementById('otpbtn');
            otpbtn.disabled = false;
        }

        window.onload = onLoadFunction;

        const button = document.getElementById('sendotp');
        button.addEventListener('click', function(event) {
           // event.preventDefault();
            var otpbtn = document.getElementById('otpbtn');
            setTimeout(function() {
                otpbtn.disabled = false;
            }, 5000); // 5000 milliseconds = 5 seconds
        });
    </script> -->
  

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
  
</body>

</html>