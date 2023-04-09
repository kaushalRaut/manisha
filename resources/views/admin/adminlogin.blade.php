<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>
    <link href="{{asset('user/style3.css')}}" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body >
    <div class="box">
        <div class="container">

            <div class="top">
                <header> Admin Login</header>
            </div>
            <form method='POST' action="{{ route('submitadminlogin' )}}" >
                @csrf
                <div class="input-field">
                    <input type="email" class="input" placeholder="Username" required name="email">
                    <i class='bx bx-user'></i>
                </div>

                <div class="input-field">
                    <input type="Password" class="input" placeholder="Password" id="" required name="password">
                    <i class='bx bx-lock-alt'></i>
                </div>

                <div class="input-field">
                    <input type="submit" class="submit" value="Login" id="">
                </div>

                <div class="two-col">
                    <p class="message">Not registered? <a href="{{route('showadminregister')}}">Create an account</a></p>
                </div>
            </form>
        </div>
    </div>







</body>

</html>
