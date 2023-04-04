@extends('layouts.app')

@section('main')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora&display=swap');

        .body{
            width:100%;
        }
    </style>

    <body>
        <form action="welcome">
        <div id="carouselExampleCaptions" class="carousel slide mt-4" style="overflow: -x:none">
            
        

        <div class="About Shop" style="background-color: rgb(0, 0, 0);"> 
            <div class="row">
                <div class="desc" style="justify-content:center; padding:0;">
                <div class="card" style="margin: 7.5em 5em; text-align:center;">
                    <div class="card-body" style="margin: 4em; margin: 4em 5em; text-align:Left">
                    <h5 class="card-title" style="font-size:xxx-large; margin-bottom:0.5em">Welcome <span class="text-secondary-emphasis">{{ Auth::user()->name }}</span></h5>
                        <h5 class="card-title" style="font-size:xxx-large; margin-bottom:0.5em">Have a nice shopping 👜</h5>
                    </div>
                    </div>
                </div>


        <div class="Categories" style="background-color: rgb(244, 244, 244);"> 
            <div class="row">
                    <div class="desc" style="justify-content:center; padding:0;">
                    <div class="card" style="margin: 7.5em 5em; text-align:center; background-color:black">
                        <div class="card-body" style="margin: 4em; margin: 4em 5em; text-align:Left">
                        <h5 class="card-title text-white" style=" font-size:xxx-large; margin-bottom:1.5em; margin-left:8.5em">Categories</h5>
                        <h5 class="card-title1 btn btn-outline-light" style="font-size:xx-large; margin-bottom:0.5em">Acsessories</h5>
                        <h5 class="card-title1 btn btn-outline-light" style="font-size:xx-large; margin-bottom:0.5em; margin-left:2em; ">Bag</h5>
                        <h5 class="card-title1 btn btn-outline-light" style="font-size:xx-large; margin-bottom:0.5em; margin-left:2em; ">T-Shirt</h5>
                        <h5 class="card-title1 btn btn-outline-light" style="font-size:xx-large; margin-bottom:0.5em; margin-left:2em; ">Jacket</h5>
                        <h5 class="card-title1 btn btn-outline-light" style="font-size:xx-large; margin-bottom:0.5em; margin-left:2em; ">Dress</h5>
                        <h5 class="card-title1 btn btn-outline-light" style="font-size:xx-large; margin-bottom:0.5em; margin-left:2em; ">Shoes</h5>
                    </div>
                    </div>
                    </div>

                
        
                {{-- <div class="check">
                <div class="">
                <div class="card" style="margin: 6em 6em">
                    <div class="card-body">
                    <h5 class="card-title">Best Products</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</form> --}}
</body>


{{-- <br><br><br>
<footer>
    <div class="footer">
        <link rel="stylesheet" type="text/css" href="{{ asset('app.css') }}" />
        <footer class="footer">
            <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
            </div>
            <ul class="menu">
            <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
            <li class="menu__item"><a class="menu__link" href="#">About</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
            <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>
        
            </ul>
            <p>Firasya Alya | All Rights Reserved</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        </body>
        
        </html>
    </div>
</footer> --}}




@endsection

