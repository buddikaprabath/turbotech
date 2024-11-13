@extends('welcome')
@section('content')
<main>
<div class="container-fluid carousel px-0 mb-5 pb-5">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="{{asset('IMAGE/service.png')}}">  
                <div class="carousel-caption">
                    <div class="container carousel-content">
                        <h4 class="text-white mb-4 animated slideInDown">TURBO TECH MOTOR</h4>
                        <h1 class="text-white display-1 mb-4 animated slideInDown">"Keep your wheels rolling smoothly."</h1>
                        
                    </div>
                </div>
            </div>
            <div class="carousel-item"> 
                <img src="{{asset('IMAGE/about.png')}}">                      
                <div class="carousel-caption">
                    <div class="container carousel-content">
                        <h4 class="text-white mb-4 ">TURBO TECH MOTOR</h4>
                        <h1 class="text-white display-1 mb-4 ">"Quality service, unbeatable expertise."</h1>
                        
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('IMAGE/contact.jpg.png')}}">                        
                <div class="carousel-caption">
                    <div class="container carousel-content">
                        <h4 class="text-white mb-4 ">TURBO TECH MOTOR</h4>
                        <h1 class="text-white display-1 mb-4 ">"From routine maintenance to intricate repairs, trust us to care for your vehicle like it's our own."</h1>
                        
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev btn btn-primary border border-2 border-start-0 border-primary" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next btn btn-primary border border-2 border-end-0 border-primary" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
</main>
@endsection