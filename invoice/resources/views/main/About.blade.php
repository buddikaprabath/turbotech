@extends('welcome')
@section('content')
<div class="Container">
    <img src="{{asset('IMAGE/about5.png')}}" alt="Automobile" style="width:100%">
    <div class="top-left">About Us</div>
    <div class="top-centered">With a legacy of 15 years in the automotive industry,</br>
         we take pride in being a trusted destination for all</br> your car care needs.</br>
        Our dedicated team of certified technicians combines</br> passion with precision, 
        ensuring your vehicle receives</br> top-notch care and attention.
       
    </div>
    <div class="bottom-centered"></div>
</div>

<div class="topic">
    <h2>AT TURBOTECH</h2>
</div>

<div class="row">
    <div class="col-5 col-s-12 menu">
      <ul>
        <li>We go beyond routine maintenance, offering a comprehensive range of 
            services from diagnostics to repairs.</li>
        <li>Equipped with state-of-the-art technology, our facility is 
            designed to handle diverse makes and models.</li>
        <li>Customer satisfaction is our driving force, and we strive 
            to create a seamless experience from the moment you walk through our doors.</li>
        <li>Trust us to keep your vehicle 
            running smoothly and safely on the road, as we continue to redefine excellence in automotive service.</li>
      </ul>
    </div>

    <div class="col-4 col-s-12">
        <h1>Have a Safe Journey!</h1>
        <p>From our roads to yours, travel with peace of mind.</p>
    </div>

    <div class="col-3 col-s-12">
        <div class="aside">
            <h2>What do we provide?</h2>
            <a href="URL_OF_THE_TARGET_PAGE">Our Services</a>
            <h2>When and where?</h2>
            <a href="URL_OF_THE_TARGET_PAGE">Contact us</a></br>
            <a href="URL_OF_THE_TARGET_PAGE">Make an appointment</a>
            <h2>what to be an exclusive customer?</h2>
            <a href="URL_OF_THE_TARGET_PAGE">Register now</a>
        </div>
    </div>
</div>
@endsection