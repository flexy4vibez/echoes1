<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_sheet/home_layout_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="container-fluid">

    {{-- All content --}}
    

        {{-- Logo and Echoes --}}
        <div class="col-12 row justify-content-center mt-4">
            <div class="col-2">
                <img src="images/favicon.png" alt="logo" class="img-fluid">
            </div>

            <div class="col-2 mt-2">
                <h2>Echoes</h2>
            </div>
        </div>

        {{-- Sign up and start listening --}}
        <div class="col-12 row justify-content-center mt-4">
            <div class="col-sm-8 text-center">
                <h2>Sign up for free and start listening</h2>
            </div>
        </div>

        {{-- Sign in with Facebook --}}
        <div class="col-12 row justify-content-center mt-4">
            <div class="col-sm-4 d-grid">
                <a href="" class="btn background_blue btn-outline-primary rounded-pill text-white"><i class="bi bi-facebook me-3"></i><span class="fw-bold">Sign up with Facebook</span></a>
            </div>
        </div>

        {{-- Sign in with Google --}}
        <div class="col-12 row justify-content-center mt-4">
            <div class="col-sm-4 d-grid">
                <a href="" class="btn btn-white border border-2 border-dark rounded-pill"><img class="me-3 mb-1" src="images/google.png" alt=""><span class="fw-bold">Continue with Google</span></a>
            </div>
        </div>

        {{-- Or --}}
        <div class="col-12 row justify-content-center mt-4">
            <div class="col-sm-4">
                <h3 class="line"><span class="line_text">Or</span></h3>
            </div>
        </div>

        {{-- Sign in with Your Email Address --}}
        <div class="col-12 row justify-content-center mt-4">
            <div class="col-sm-4 text-center">
                <h4>Sign up with your email address</h4>
            </div>
        </div>

        {{-- Sign in Form --}}
        <div class="col-12 row justify-content-center mt-4">
            <div class="col-sm-4">
                <form action="" method="">

                    <label for="" class="form-label"><h5>What's your email</h5></label>
                    <input type="text" name="" id="" class="form-control" placeholder="Enter your email">

                    <label for="" class="form-label mt-2"><h5>Create a password</h5></label>
                    <input type="password" name="" id="" class="form-control" placeholder="Create a password">

                    <label for="" class="form-label mt-2"><h5>What should we call you?</h5></label>
                    <input type="text" name="" id="" class="form-control" placeholder="Enter a profile name">
                    <p>This appears on your profile</p>

                    <div class="col-12 text-center">
                        <button class="btn btn-outline-danger background_orange text-white rounded-pill mt-2" type="submit">Sign up</button>
                    </div>

                </form>
            </div>
        </div>

        {{-- Got no account yet? --}}
        <div class="col-12 row justify-content-center mt-4 mb-4">
            <div class="col-sm-4">
                <h3 class="line"><span class="line_text">Got an account already?</span></h3>
                <div class="col-12 text-center">
                    <a href="{{url('/sign_in')}}" class="btn btn-outline-danger background_orange text-white rounded-pill mt-2">Sign in here</a>
                </div>
            </div>
        </div>

    

    
    
</body>
</html>