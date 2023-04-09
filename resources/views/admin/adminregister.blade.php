<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('user/registercss.css') }}" rel="stylesheet">


</head>

<body style="background-color: rgb(37, 150, 190)">
    <div class="container">
        <h1 class="form-title">Admin Registration</h1>
        <form method="post" action="{{route('submitAdminRegister')}}">
            @csrf
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="fullName">Full Name</label>
                    <input type="text" id="fullName" name='name' placeholder="Enter Full Name" />
                </div>

                <div class="user-input-box">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter Email" />
                </div>

                <div class="user-input-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password" />
                </div>
                <div class="user-input-box">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name='password_confirmation'
                        placeholder="Confirm Password" />

                </div>
            </div>
            <div class="gender-details-box">
                <span class="gender-title"></span>
                <div class="gender-category">
                    @if ($errors->has('password'))
                        <span>Please! enter same password||
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                </div>
            </div>
            <div class="form-submit-btn">
                <input type="submit" value="Register" name='submit'>
            </div>
        </form>
    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
