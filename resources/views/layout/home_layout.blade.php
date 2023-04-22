<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_sheet/home_layout_style.css">
</head>
<body class="container-fluid bg-secondary px-0">

{{-- Top Navbar --}}
<div class="col-sm-12 top_nav_sticky">

    <nav class="navbar navbar-expand-lg nav_background">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="images/favicon.png" alt="echoes logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active fw-bold fs-3 text-white" aria-current="page" href="#">Echoes</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search for artists, songs, and albums!" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active fw-bold" aria-current="page" href="#"><p class="text_orange">Sign In / Sign Up</p></a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#"><button class="btn background_orange text-white fw-bold">Upload</button></a>
                </li>
            </ul>

          </div>
        </div>
      </nav>
</div>


{{-- Left Navbar --}}

{{-- Biggest Div --}}
<div class="col-sm-12 row justify-content-between">

    {{-- Left --}}
    <div class="col-sm-3">

        <div class="col-sm-12 left_nav_sticky1" style="position: sticky; top:10%;">
            <img class="img-fluid" src="images/left_nav1.png" alt="artist">
        </div>

        <div class="col-sm-12 nav_background text-center text-white" style="position: sticky; top:57%;">

        
            <p class="fs-5">Home</p>
            <p class="fs-5">Genres</p>
            <p class="fs-5">Top Albums</p>
            <p class="fs-5">Friends</p>
            <p class="fs-5">Liked Songs</p>
            <p class="fs-6">Terms and Conditions</p>
        

        </div>

    </div>

    <div class="col-sm-9">
        @yield('whole_page')
    </div>
</div>

 
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>