@extends('layout.home_layout')

@section('whole_page')
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="style_sheet/home_layout_style.css">
</head>
<body>

    {{-- Recent Uploads Div --}}
    <div class="col-sm-12 row justify-content-between text-white mt-3">
        <div class="col-sm-3"><h4 style="font-family: 'Pacifico', cursive;">Recent Uploads</h4></div>
        <div class="col-sm-3"><h4>SEE ALL</h4></div>
    </div>
    
    {{-- List of Albums --}}
    {{-- Row 1 Recent Uploads --}}
    <div class="col-sm-12 row justify-content-between text_orange mt-3">

        <div class="col-sm-3">
            <img src="images/album_background.png" alt="" class="img-fluid">
            <img src="images/track1.png" alt="" class="img-fluid track_position">
        </div>

        <div class="col-sm-3">
            <img src="images/album_background.png" alt="" class="img-fluid"> 
            <img src="images/track2.png" alt="" class="img-fluid track_position">
        </div>

        <div class="col-sm-3">
            <img src="images/album_background.png" alt="" class="img-fluid">
            <img src="images/track3.png" alt="" class="img-fluid track_position">
        </div>

        <div class="col-sm-3">
            <img src="images/album_background.png" alt="" class="img-fluid">
            <img src="images/track4.png" alt="" class="img-fluid track_position">
        </div>

    </div>
    

    {{-- Artists --}}
    <div class="col-sm-12 row justify-content-between text-white" style="position: relative; top:-16%;">
        <div class="col-sm-3"><h4 style="font-family: 'Pacifico', cursive;">Artists</h4></div>
        <div class="col-sm-3"><h4>SEE ALL</h4></div>
    </div>

    {{-- Row 2 Artists --}}
    <div class="col-sm-12 row justify-content-between text_orange mt-3" style="position: relative; top:-16%;">

        <div class="col-sm-3">
            <img src="images/artist1.png" alt="" class="img-fluid">  
        </div>

        <div class="col-sm-3">
            <img src="images/artist2.png" alt="" class="img-fluid"> 
        </div>

        <div class="col-sm-3">
            <img src="images/artist3.png" alt="" class="img-fluid">  
        </div>

        <div class="col-sm-3">
            <img src="images/artist4.png" alt="" class="img-fluid">  
        </div>

    </div>


    {{-- Footer --}}
    <div class="container-fluid row justify-content-between footer_background text-white px-o" style="position: relative; top:-16%;">
        <div class="col-sm-4">
            <p class="py-2" style="font-family: 'Pacifico', cursive;">welcome to echoes</p>
            <p class="pb-2">Sign up and get unlimited songs</p>
        </div>
            
        <div class="col-sm-2">
            <button class="btn background_orange text-white mt-4 rounded-pill">Sign up free</button>
        </div>
    </div>

    
    

</body>
</html>

@endsection